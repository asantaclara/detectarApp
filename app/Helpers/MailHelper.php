<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Mail;

class MailHelper
{
    public static function sendMail($data, $recipient, $subject)
    {
        Mail::send('resultados-email', [
            'user_name' => $data['user_name'],
            'user_birthday' => $data['user_birthday'],
            'user_age' => $data['user_age'],
            'today' => $data['today'],
            'porcentaje_daltonismo' => $data['porcentaje_daltonismo'],
            'porcentaje_disortografia' => $data['porcentaje_disortografia'],
            'porcentaje_discalculia' => $data['porcentaje_discalculia'],
            'diagnostico' => $data['diagnostico'],
            'all_ok' => $data['all_ok'],
          ], 
            function ($message) use ($recipient, $subject) {
            $message->to($recipient)->subject($subject);
        });
    }

    public static function natural_language_join(array $list, $conjunction = 'y') {
        $last = array_pop($list);
        if ($list) {
          return implode(', ', $list) . ' ' . $conjunction . ' ' . $last;
        }
        return $last;
      }
}
