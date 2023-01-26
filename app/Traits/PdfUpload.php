<?php

namespace App\Traits;

trait PdfUpload
{
    public function pdfUpload($data)
    {
        $file = $data['file'];
        $name = uniqid('devbek', true) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('pdf'), $name);
        $data['file'] = $name;
        return $data;

    }
}
