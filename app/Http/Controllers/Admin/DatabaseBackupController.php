<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class DatabaseBackupController extends Controller
{
    public function downloadDatabase()
    {
        // DB info from .env
        $dbHost = env('DB_HOST', '127.0.0.1');
        $dbUser = env('DB_USERNAME', 'root');
        $dbPass = env('DB_PASSWORD', '');
        $dbName = env('DB_DATABASE', 'lms');

        // Backup directory & filename
        $backupPath = storage_path('app/backups');
        $fileName = 'backup_' . date('Y-m-d_H-i-s') . '.sql';
        $filePath = $backupPath . '/' . $fileName;
        // Ensure directory exists
        if (!File::exists($backupPath)) {
            File::makeDirectory($backupPath, 0755, true);
        }

        $mysqldumpPath = 'D:\laragon\bin\mysql\mysql-8.0.30-winx64\bin\mysqldump.exe';
        // dd($mysqldumpPath);
        $command = sprintf(
            '"%s" --user=%s --password=%s --host=%s %s > "%s"',
            $mysqldumpPath,
            escapeshellarg($dbUser),
            escapeshellarg($dbPass),
            escapeshellarg($dbHost),
            escapeshellarg($dbName),
            $filePath
        );

        $result = null;
        $output = null;
        exec($command, $output, $result);

        if ($result !== 0 || !File::exists($filePath)) {
            return back()->with('error', '❌ Database backup failed.');
        }

        return response()->download($filePath)->deleteFileAfterSend(true);
    }
}
