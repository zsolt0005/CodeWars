<?php declare(strict_types = 1);

namespace CodeWars;

// https://www.codewars.com/kata/52742f58faf5485cae000b9a
final class HumanReadableDurationFormat
{
  public static function formatDuration(int $inputSeconds): string
  {
    if($inputSeconds === 0) return 'now';

    $years = (int) ($inputSeconds / 31536000);
    $days = (int) ($inputSeconds % 31536000 / 86400);
    $hours = (int) ($inputSeconds % 86400 / 3600);
    $minutes = (int) ($inputSeconds % 3600 / 60);
    $seconds = $inputSeconds % 60;

    $readableParts = [];
    if($seconds > 0) $readableParts[] = $seconds === 1 ? '1 second' : $seconds . ' seconds';
    if($minutes > 0) $readableParts[] = $minutes === 1 ? '1 minute' : $minutes . ' minutes';
    if($hours > 0) $readableParts[]   = $hours   === 1 ? '1 hour'   : $hours   . ' hours';
    if($days > 0) $readableParts[]    = $days    === 1 ? '1 day'    : $days    . ' days';
    if($years > 0) $readableParts[]   = $years   === 1 ? '1 year'   : $years   . ' years';

    $readableDuration = '';
    while(!empty($readableParts))
    {
      $readableDuration .= array_pop($readableParts);
      if(count($readableParts) > 1) $readableDuration .= ', ';
      else if(count($readableParts) === 1) $readableDuration .= ' and ';
    }

    return $readableDuration;
  }
}
