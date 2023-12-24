<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>
    <div class="input-group input-group-lg">
        <div class="input-group-prepend">
          <h1 class="input-group-text" id="inputGroup-sizing-lg form-control">Select2 Dropdown</h1>
        </div>
        <select name="lang"  class="lang-select-input " aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            <option >Language</option>
            <option >laravel</option>
            <option >python</option>
            <option >c++</option>
            <option >HTML</option>
            <option >PHP</option>
        </select> 
      </div>
      <script type="text/javascript">
        // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.lang-select-input').select2();
    });
    </script>
</body>
</html>

 