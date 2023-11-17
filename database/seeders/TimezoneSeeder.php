<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Timezone;

class TimezoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Timezone::create(['value' => 'Pacific/Midway', 'name' => '(UTC-11:00) Midway Island, American Samoa']);
        Timezone::create(['value' => 'Pacific/Honolulu', 'name' => '(UTC-10:00) Hawaii']);
        Timezone::create(['value' => 'America/Anchorage', 'name' => '(UTC-08:00) Alaska']);
        Timezone::create(['value' => 'America/Tijuana', 'name' => '(UTC-07:00) Baja California']);
        Timezone::create(['value' => 'America/Los_Angeles', 'name' => '(UTC-07:00) Pacific Time (US and Canada)']);
        Timezone::create(['value' => 'America/Phoenix', 'name' => '(UTC-07:00) Arizona']);
        Timezone::create(['value' => 'America/Chihuahua', 'name' => '(UTC-06:00) Chihuahua, La Paz, Mazatlan']);
        Timezone::create(['value' => 'America/Denver', 'name' => '(UTC-06:00) Mountain Time (US and Canada)']);
        Timezone::create(['value' => 'America/Belize', 'name' => '(UTC-06:00) Central America']);
        Timezone::create(['value' => 'America/Chicago', 'name' => '(UTC-05:00) Central Time (US and Canada)	']);
        Timezone::create(['value' => 'America/Mexico_City', 'name' => '(UTC-05:00) Guadalajara, Mexico City, Monterrey']);
        Timezone::create(['value' => 'America/Regina', 'name' => '(UTC-06:00) Saskatchewan']);
        Timezone::create(['value' => 'America/Bogota', 'name' => '(UTC-05:00) Bogota, Lima, Quito']);
        Timezone::create(['value' => 'America/Jamaica', 'name' => '(UTC-05:00) Kingston, George Town']);
        Timezone::create(['value' => 'America/New_York', 'name' => '(UTC-04:00) Eastern Time (US and Canada)']);
        Timezone::create(['value' => 'America/Indiana/Indianapolis', 'name' => '(UTC-04:00) Indiana (East)']);
        Timezone::create(['value' => 'America/Caracas', 'name' => '(UTC-04:30) Caracas']);
        Timezone::create(['value' => 'America/Asuncion', 'name' => '(UTC-03:00) Asuncion']);
        Timezone::create(['value' => 'America/Halifax', 'name' => '(UTC-03:00) Atlantic Time (Canada)']);
        Timezone::create(['value' => 'America/Cuiaba', 'name' => '(UTC-04:00) Cuiaba']);
        Timezone::create(['value' => 'America/Manaus', 'name' => '(UTC-04:00) Georgetown, La Paz, Manaus, San Juan']);
        Timezone::create(['value' => 'America/St_Johns', 'name' => '(UTC-02:30) Newfoundland and Labrador']);
        Timezone::create(['value' => 'America/Sao_Paulo', 'name' => '(UTC-03:00) Brasilia']);
        Timezone::create(['value' => 'America/Buenos_Aires', 'name' => '(UTC-03:00) Buenos Aires']);
        Timezone::create(['value' => 'America/Cayenne', 'name' => '(UTC-03:00) Cayenne, Fortaleza']);
        Timezone::create(['value' => 'America/Godthab', 'name' => '(UTC-02:00) Greenland']);
        Timezone::create(['value' => 'America/Montevideo', 'name' => '(UTC-03:00) Montevideo']);
        Timezone::create(['value' => 'America/Bahia', 'name' => '(UTC-03:00) Salvador']);
        Timezone::create(['value' => 'America/Santiago', 'name' => '(UTC-03:00) Santiago']);
        Timezone::create(['value' => 'America/Noronha', 'name' => '(UTC-02:00) Mid-Atlantic']);
        Timezone::create(['value' => 'Atlantic/Azores', 'name' => '(UTC+00:00) Azores']);
        Timezone::create(['value' => 'Atlantic/Cape_Verde', 'name' => '(UTC-01:00) Cape Verde Islands']);
        Timezone::create(['value' => 'Europe/London', 'name' => '(UTC+01:00) Dublin, Edinburgh, Lisbon, London']);
        Timezone::create(['value' => 'Africa/Casablanca', 'name' => '(UTC+01:00) Casablanca']);
        Timezone::create(['value' => 'Africa/Monrovia', 'name' => '(UTC+00:00) Monrovia, Reykjavik']);
        Timezone::create(['value' => 'Europe/Amsterdam', 'name' => '(UTC+02:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna']);
        Timezone::create(['value' => 'Europe/Belgrade', 'name' => '(UTC+02:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague']);
        Timezone::create(['value' => 'Europe/Brussels', 'name' => '(UTC+02:00) Brussels, Copenhagen, Madrid, Paris']);
        Timezone::create(['value' => 'Europe/Warsaw', 'name' => '(UTC+02:00) Sarajevo, Skopje, Warsaw, Zagreb']);
        Timezone::create(['value' => 'Africa/Algiers', 'name' => '(UTC+01:00) West Central Africa']);
        Timezone::create(['value' => 'Africa/Windhoek', 'name' => '(UTC+02:00) Windhoek']);
        Timezone::create(['value' => 'Europe/Athens', 'name' => '(UTC+03:00) Athens, Bucharest']);
        Timezone::create(['value' => 'Asia/Beirut', 'name' => '(UTC+03:00) Beirut']);
        Timezone::create(['value' => 'Africa/Cairo', 'name' => '(UTC+02:00) Cairo']);
        Timezone::create(['value' => 'Asia/Damascus', 'name' => '(UTC+03:00) Damascus']);
        Timezone::create(['value' => 'EET', 'name' => '(UTC+03:00) Eastern Europe']);
        Timezone::create(['value' => 'Africa/Harare', 'name' => '(UTC+02:00) Harare, Pretoria']);
        Timezone::create(['value' => 'Europe/Helsinki', 'name' => '(UTC+03:00) Helsinki, Kiev, Riga, Sofia, Tallinn, Vilnius']);
        Timezone::create(['value' => 'Asia/Istanbul', 'name' => '(UTC+03:00) Istanbul']);
        Timezone::create(['value' => 'Asia/Jerusalem', 'name' => '(UTC+03:00) Jerusalem']);
        Timezone::create(['value' => 'Europe/Kaliningrad', 'name' => '(UTC+02:00) Kaliningrad']);
        Timezone::create(['value' => 'Africa/Tripoli', 'name' => '(UTC+02:00) Tripoli']);
        Timezone::create(['value' => 'Asia/Amman', 'name' => '(UTC+03:00) Amman']);
        Timezone::create(['value' => 'Asia/Baghdad', 'name' => '(UTC+03:00) Baghdad']);
        Timezone::create(['value' => 'Asia/Kuwait', 'name' => '(UTC+03:00) Kuwait, Riyadh']);
        Timezone::create(['value' => 'Europe/Minsk', 'name' => '(UTC+03:00) Minsk']);
        Timezone::create(['value' => 'Europe/Moscow', 'name' => '(UTC+03:00) Moscow, St. Petersburg, Volgograd']);
        Timezone::create(['value' => 'Africa/Nairobi', 'name' => '(UTC+03:00) Nairobi']);
        Timezone::create(['value' => 'Asia/Tehran', 'name' => '(UTC+03:30) Tehran']);
        Timezone::create(['value' => 'Asia/Muscat', 'name' => '(UTC+04:00) Abu Dhabi, Muscat']);
        Timezone::create(['value' => 'Asia/Baku', 'name' => '(UTC+05:00) Baku']);
        Timezone::create(['value' => 'Europe/Samara', 'name' => '(UTC+04:00) Izhevsk, Samara']);
        Timezone::create(['value' => 'Indian/Mauritius', 'name' => '(UTC+04:00) Port Louis']);
        Timezone::create(['value' => 'Asia/Tbilisi', 'name' => '(UTC+04:00) Tbilisi']);
        Timezone::create(['value' => 'Asia/Yerevan', 'name' => '(UTC+04:00) Yerevan']);
        Timezone::create(['value' => 'Asia/Kabul', 'name' => '(UTC+04:30) Kabul']);
        Timezone::create(['value' => 'Asia/Tashkent', 'name' => '(UTC+05:00) Tashkent, Ashgabat']);
        Timezone::create(['value' => 'Asia/Yekaterinburg', 'name' => '(UTC+05:00) Ekaterinburg']);
        Timezone::create(['value' => 'Asia/Karachi', 'name' => '(UTC+05:00) Islamabad, Karachi']);
        Timezone::create(['value' => 'Asia/Kolkata', 'name' => '(UTC+05:30) Chennai, Kolkata, Mumbai, New Delhi']);
        Timezone::create(['value' => 'Asia/Colombo', 'name' => '(UTC+05:30) Sri Jayawardenepura']);
        Timezone::create(['value' => 'Asia/Katmandu', 'name' => '(UTC+05:45) Kathmandu']);
        Timezone::create(['value' => 'Asia/Almaty', 'name' => '(UTC+06:00) Astana']);
        Timezone::create(['value' => 'Asia/Dhaka', 'name' => '(UTC+06:00) Dhaka']);
        Timezone::create(['value' => 'Asia/Novosibirsk', 'name' => '(UTC+06:00) Novosibirsk']);
        Timezone::create(['value' => 'Asia/Rangoon', 'name' => '(UTC+06:30) Yangon (Rangoon)']);
        Timezone::create(['value' => 'Asia/Bangkok', 'name' => '(UTC+07:00) Bangkok, Hanoi, Jakarta']);
        Timezone::create(['value' => 'Asia/Krasnoyarsk', 'name' => '(UTC+07:00) Krasnoyarsk']);
        Timezone::create(['value' => 'Asia/Chongqing', 'name' => '(UTC+08:00) Beijing, Chongqing, Hong Kong SAR, Urumqi']);
        Timezone::create(['value' => 'Asia/Irkutsk', 'name' => '(UTC+08:00) Irkutsk']);
        Timezone::create(['value' => 'Asia/Kuala_Lumpur', 'name' => '(UTC+08:00) Kuala Lumpur, Singapore']);
        Timezone::create(['value' => 'Australia/Perth', 'name' => '(UTC+08:00) Perth']);
        Timezone::create(['value' => 'Asia/Taipei', 'name' => '(UTC+08:00) Taipei']);
        Timezone::create(['value' => 'Asia/Ulaanbaatar', 'name' => '(UTC+08:00) Ulaanbaatar']);
        Timezone::create(['value' => 'Asia/Tokyo', 'name' => '(UTC+09:00) Osaka, Sapporo, Tokyo']);
        Timezone::create(['value' => 'Asia/Seoul', 'name' => '(UTC+09:00) Seoul']);
        Timezone::create(['value' => 'Asia/Yakutsk', 'name' => '(UTC+09:00) Yakutsk']);
        Timezone::create(['value' => 'Australia/Adelaide', 'name' => '(UTC+10:30) Adelaide']);
        Timezone::create(['value' => 'Australia/Darwin', 'name' => '(UTC+09:30) Darwin']);
        Timezone::create(['value' => 'Australia/Brisbane', 'name' => '(UTC+10:00) Brisbane']);
        Timezone::create(['value' => 'Australia/Canberra', 'name' => '(UTC+11:00) Canberra, Melbourne, Sydney']);
        Timezone::create(['value' => 'Pacific/Guam', 'name' => '(UTC+10:00) Guam, Port Moresby']);
        Timezone::create(['value' => 'Australia/Hobart', 'name' => '(UTC+11:00) Hobart']);
        Timezone::create(['value' => 'Asia/Magadan', 'name' => '(UTC+10:00) Magadan']);
        Timezone::create(['value' => 'Asia/Vladivostok', 'name' => '(UTC+10:00) Vladivostok, Magadan']);
        Timezone::create(['value' => 'Asia/Srednekolymsk', 'name' => '(UTC+11:00) Chokirdakh']);
        Timezone::create(['value' => 'Pacific/Guadalcanal', 'name' => '(UTC+11:00) Solomon Islands, New Caledonia']);
        Timezone::create(['value' => 'Asia/Anadyr', 'name' => '(UTC+12:00) Anadyr, Petropavlovsk-Kamchatsky']);
        Timezone::create(['value' => 'Pacific/Auckland', 'name' => '(UTC+13:00) Auckland, Wellington']);
        Timezone::create(['value' => 'Pacific/Fiji', 'name' => '(UTC+12:00) Fiji Islands, Kamchatka, Marshall Islands']);
        Timezone::create(['value' => 'Pacific/Tongatapu', 'name' => "(UTC+13:00) Nuku'alofa"]);
        Timezone::create(['value' => 'Pacific/Apia', 'name' => '(UTC+14:00) Samoa']);
    }
}
