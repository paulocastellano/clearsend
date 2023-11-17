<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

use App\Models\Workspace;
use App\Models\UserWorkspace;
use App\Enums\User\Role as UserRole;

trait HasWorkspaces
{
    public function workspaces()
    {
        return $this->belongsToMany(Workspace::class)
            ->using(UserWorkspace::class)
            ->withPivot('role')
            ->withCount('users')
            ->as('membership')
            ->withTimestamps();
    }

    public function is_current_workspace($workspace)
    {
        return $workspace->id === $this->currentWorkspace->id;
    }

    public function allWorkspaces()
    {
        return $this->workspaces->sortBy('name');
    }

    public function current_workspace()
    {
        return $this->belongsTo(Workspace::class, 'current_workspace_id');
    }

    public function belongs_to_workspace($workspace)
    {
        return $this->workspaces->contains(function ($t) use ($workspace) {
            return $t->id === $workspace->id;
        });
    }

    public function workspace_role($workspace)
    {
        if (!$this->belongs_to_workspace($workspace)) {
            return;
        }

        $user = $this->whereHas('workspaces', function (Builder $query) use ($workspace) {
            $query->where('workspaces.id', $workspace->id);
        })
        ->where('id', $this->id)
        ->with('workspaces', function ($query) use ($workspace) {
            $query->where('workspaces.id', $workspace->id);
        })
        ->first();

        return $user->workspaces->first()->membership->role;
    }

    public function owns_workspace($workspace)
    {
        if (is_null($workspace)) {
            return false;
        }

        return $this->workspaceRole($workspace) === UserRole::ROLE_OWNER->value;
    }


    public function is_admin_on_workspace($workspace)
    {
        if (is_null($workspace)) {
            return false;
        }

        return $this->workspaceRole($workspace) !== UserRole::ROLE_USER->value;
    }

    public function has_workspace_role($workspace, $role)
    {
        if (!$this->belongs_to_workspace($workspace)) {
            return;
        }

        $user = $this->whereHas('workspaces', function (Builder $query) use ($workspace) {
            $query->where('workspaces.id', $workspace->id);
        })
            ->where('id', $this->id)
            ->with('workspaces')
            ->first();

        return $user->workspaces->first()->membership->role === $role;
    }

    public function switch_workspace($workspace)
    {
        if (!$this->belongs_to_workspace($workspace)) {
            return false;
        }

        $this->forceFill([
            'current_workspace_id' => $workspace->id,
        ])->save();

        $this->setRelation('currentWorkspace', $workspace);

        return true;
    }
}
