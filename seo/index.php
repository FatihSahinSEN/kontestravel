<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TurkeyTravel - Sitemap Oluşturucu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#">TurkeyTravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="btn btn-info" href="index.php?lang=es">Spanish</a>
    </div>
</nav>
<?php
if(isset($_GET["lang"])){
    $lang="es";
}else{
    $lang="es";
}
$site = json_decode(file_get_contents("../includes/languages/lang.meta.".$lang.".php"), true);
$pageCount=count($site);
?>
<div class="w-100 p-3 center-div" id="tableContainer" style="position:relative;">
    <table class="table table-striped table-hover" id="mainTable" name="DynamicTable">
        <thead>
        <tr>
            <th style="width: 20em;"> PAGES (<?php echo $pageCount;?>)</th>
            <th> TITLE</th>
            <th> DESCRIPTION</th>
            <th> KEYWORDS</th>
            <th style="width: 8em;"></th>
        </tr>
        </thead>
        <tbody id="dinamicTable">
        <?php
        foreach ($site as $key => $value) {
            ?>
            <tr id="tr-1" class="">
                <td><?php echo $key; ?></td>
                <td><?php echo $value["title"]; ?></td>
                <td><?php echo $value["description"]; ?></td>
                <td><?php echo $value["keywords"]; ?></td>
                <td id="td-1"><!-- Button change status -->
                    <a href="../<?php echo $lang."/".$key;?>" target="_blank" class="btn btn-sm btn-info text-white">Page</a>
                    <button type="button"
                            class="btn btn-sm btn-primary editingTRbutton fas fa-pencil-alt noUnderlineCustom text-white"
                            data-toggle="modal" data-target="#editModal">Edit
                    </button>
            </tr>

            <?php
        }
        ?>
        </tbody>
    </table>

</div>



<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 id="error" class="text-center text-danger"></h6>
                <form action="" method="POST" enctype="multipart/form-data"  method="POST" id="ModalForm">
                    <input type="hidden" id="editId" value="">
                    <div class="form-group">
                        <label for="title"><b>TITLE </b> <span id="chars0"></span></label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Page Title" maxlength="70">
                    </div>
                    <div class="form-group">
                        <label for="description"><b>DESCRIPTION </b><span id="chars1"></span></label>
                        <textarea name="description" class="form-control" id="description" placeholder="Page Description" rows="5" maxlength="160"> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="keywords"><b>KEYWORDS </b><span id="chars2"></span></label>
                        <textarea name="keywords" class="form-control" id="keywords" placeholder="Page Keywords" rows="3" maxlength="180"></textarea>
                    </div>
                    <div class="modal-footer">
                        <a  class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <button type="button"  id="save" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    $(function() {
        $('table').on('click', 'button.editingTRbutton',function (ele) {
            var tr = ele.target.parentNode.parentNode;
            var id = tr.cells[0].textContent;
            var title = tr.cells[1].textContent;
            var description = tr.cells[2].textContent;
            var keywords = tr.cells[3].textContent;

            $('h5.modal-title').html('PAGE: '+id);
            $('#title').val(title);
            $('#description').val(description);
            $('#keywords').val(keywords);
            $("#chars0").html($('#title').val().length);
            $("#chars1").html($('#description').val().length);
            $("#chars2").html($('#keywords').val().length);
            $( "#title" ).keyup(function() { $("#chars0").html($('#title').val().length); });
            $( "#description" ).keyup(function() { $("#chars1").html($('#description').val().length); });
            $( "#keywords" ).keyup(function() { $("#chars2").html($('#keywords').val().length); });

            $("form#ModalForm").attr('action', window.location.href+'/update/'+id);
            $( "#save" ).click(function() {
                var data = {
                    id: id,
                    title: $('#title').val(),
                    description: $('#description').val(),
                    keywords: $('#keywords').val(),
                    lang: <?php echo '"'.$lang.'"';?>
                };
                $.post( "save.php", data )
                    .done(function( callBack ) {
                        var callBack2=JSON.parse(callBack);
                        tr.cells[1].textContent=callBack2.title;
                        tr.cells[2].textContent=callBack2.description;
                        tr.cells[3].textContent=callBack2.keywords;
                        if(callBack2.blob){
                            $('#editModal').modal('hide');
                        }else{
                            $('#editModal').html(callBack2.sonuc)
                        }
                    });
            });
        });
    });</script>
</body>
</html>
<?php
