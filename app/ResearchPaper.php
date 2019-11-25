<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchPaper extends Model
{
    protected $table= "pdf";
    protected $fillable = ["id","pdf_name","pdfLocation","description"];
}
