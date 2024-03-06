<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" id="form" enctype="multipart/form-data">
        @csrf
        Tên file: <input type="file" name="file" accept=".jpg, .png, .jpeg, .gif" onchange="checkFileSize()">
        <button type="submit" onclick="handleUploadFile()">Upload file</button>
    </form>
    <h1 id='note'></h1>
</body>
</html>

<Script>
    const file = document.querySelector('input[type="file"]');
    file.addEventListener('change', function(){
        console.log(file.files[0]);
        document.getElementById('note').innerText = '';
    });
    function handleUploadFile() {
        event.preventDefault();
        if(!file.files.length) {
            document.getElementById('note').innerText = 'Vui lòng chọn tệp cần upload';
        } else {
            document.querySelector('form').submit();
        }
    }
    function checkFileSize() {
        var maxFileSizeInBytes = 1024 * 1024 * 5; // Giới hạn dung lượng file là 5 MB

        if (file.files?.length > 0) {
            var fileSize = file.files[0].size; 
            if (fileSize > maxFileSizeInBytes) {
                alert('Dung lượng file không được vượt quá 5 MB.');
                file.value = '';
        }
    }
  }
</Script>

