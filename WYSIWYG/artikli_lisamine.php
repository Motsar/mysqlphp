<!DOCTYPE html>
<html>
<head>
    <title>WYSIWYG</title>
    <style type="text/css">
        #sisu{
            width: 700px;
        }
    </style>

</head>
<body>
<script src="/ckeditor/ckeditor.js"></script>
<div id="sisu">
    <h2>Artikli lisamine</h2>

    <form action="" method="post">
			<textarea class="ckeditor" cols="20" name="uudis" id="uudis" rows="10">
            </textarea>
        <script>
            CKEDITOR.replace( 'uudis', {
                uiColor: '#367cc4'
            });
        </script>
        <br>
        <input type="submit" value="Salvesta">
    </form>
</div>

</body>
</html>
