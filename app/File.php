<?php
namespace App; use Illuminate\Database\Eloquent\Model; class File extends Model { protected $guarded = array(); public $timestamps = false; function deleteFile() { try { Storage::disk($this->driver)->delete($this->path); } catch (\Exception $spdfbc42) { \Log::error('File.deleteFile Error: ' . $spdfbc42->getMessage(), array('exception' => $spdfbc42)); } } public static function getProductFolder() { return 'images/product'; } }