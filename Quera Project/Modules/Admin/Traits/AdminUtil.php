<?php

namespace Modules\Admin\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

trait AdminUtil
{
    public function uploadImages($obj, $filepath)
    {
        $timestamp = Carbon::now()->timestamp;
        $filename = $timestamp.'_'.$obj->getClientOriginalName();
        $path = $filepath.'/'.Carbon::now()->format('Y');
        return Storage::disk('public')->putFileAs($path,$obj,$filename);
    }

    public function createSlug($title,$char='-')
    {
        return str_replace(' ',$char,trim($title));
    }

    public function formatBytes($bytes,$maxDecimal=2)
    {
        $i = 0;

        while ((int)$bytes > 1) {
            if ((int)($bytes / 1024) > 0) {
                $bytes = $bytes / 1024;
                $i++;
            } else {
                break;
            }
        }
        $unit = match($i){
            0 => 'B',
            1 => 'KB',
            2 => 'MB',
            3 => 'GB',
            4 => 'TB'

        };
        $result = number_format((float)$bytes,$maxDecimal,'.')+0;
        return $result.' '.$unit;

    }
}
