<?php

namespace App\Http\Controllers\Api;

use App\Models\Domain;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use App\Models\Email;

class EmailController extends Controller
{

    public function search(Request $request)
    {
        $request->validate([
            'domain' => ['required'],
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
        ]);

        $email = Email::where('first_name', 'ILIKE', '%' . $request->first_name . '%')
            ->where('last_name', 'ILIKE', '%' . $request->last_name . '%')
            ->whereHas('domain', function ($query) use ($request) {
                $query->where('name', $request->domain);
            })->first();

        if (!$email) {
            return response()->json(['error' => 'Email not found'], 404);
        }

        return response()->json($email);
    }

    public function verify(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email']
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $email = 'paulo@mercantive.com';

        list($user, $domain) = explode('@', $email);

        $stats = [
            'regexp' => false,
            'webmail' => false, // custom domain or gmail
            'mx' => false,
            'smtp' => false,
        ];

        $providers = [
            'gmail.com',
            'hotmail.com',
            'yahoo.com',
            'outlook.com',
            'live.com',
            'aol.com',
            'icloud.com',
            'mail.com',
            'gmx.com',
            'yandex.com',
            'zoho.com',
            'protonmail.com'
        ];

        // Check if the email is from a free provider
        foreach ($providers as $provider) {
            if (strpos($domain, $provider) !== false) {
                $stats['webmail'] = true;
            }
        }

        // Check if the domain has valid MX (Mail Exchange) records
        if (checkdnsrr($domain, 'MX')) {
            $stats['mx'] = true;
        }

        // Check if email has a valid format
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $stats['regexp'] = true;
        }

        // check if this email address exists and can receive emails
        // $smtp = $this->validateEmailBySMTP($email);
        // if ($smtp) {
        //     $stats['smtp'] = true;
        // }

        return $stats; // The email is either invalid or the domain cannot receive emails.
    }

    public function validateEmailBySMTP($email)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'email-smtp.us-east-1.amazonaws.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'AKIAQUJZJ3D5NF5XMYTB';
            $mail->Password = 'BO/EihdM2PmMUlATCWw/NHLy/8m8hsciNH/ArCp0O9El';
            $mail->SMTPSecure = 'tls'; // tls or ssl
            $mail->Port = 587; // Check your SMTP server's settings for the correct port

            //Recipients
            $mail->setFrom('no-reply@changelogfy.com', 'Hunter');
            $mail->addAddress($email);

            //Content
            $mail->isHTML(false);
            $mail->Subject = 'SMTP Connection Test';
            $mail->Body = 'This is a test email to check SMTP connection.';

            // Try to send the email
            $mail->send();

            // If the email is sent successfully, return true
            return true;
        } catch (Exception $e) {
            // If an exception occurs, return false
            return false;
        }
    }
}
