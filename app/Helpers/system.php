<?php
// xây dựng những hàm đóng vai trò là system

// Thêm autoload files:[app/helpers/system.php] + chạy terminal composer dump-autoload
function uploadFile($nameFolder, $file)
{
	$fileName = time() . '_' . $file->getClientOriginalName();
	return $file->storeAs($nameFolder, $fileName, 'public');
}
