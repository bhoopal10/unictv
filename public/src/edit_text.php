<!DOCTYPE html>
<html>
<head>
    <title>WELCOME</title>
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"/>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <style>
        body{margin-top:50px;background: rgb(36, 39, 41);}
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="New file">
                            <i class="fa fa-file-o"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Save">
                            <i class="fa fa-save"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Print">
                            <i class="fa fa-print"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Source code">
                            <i class="fa fa-code"></i> Source
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Bold">
                            <i class="fa fa-bold"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Italic">
                            <i class="fa fa-italic"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Underline">
                            <i class="fa fa-underline"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Strikethrough">
                            <i class="fa fa-strikethrough"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Cut">
                            <i class="fa fa-scissors"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Copy">
                            <i class="fa fa-copy"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Past">
                            <i class="fa fa-paste"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Undo">
                            <i class="fa fa-reply"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Redo">
                            <i class="fa fa-share"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Align left">
                            <i class="fa fa-align-left"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Align center">
                            <i class="fa fa-align-center"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Align right">
                            <i class="fa fa-align-right"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Align justify">
                            <i class="fa fa-align-justify"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Numbered list">
                            <i class="fa fa-list-ol"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Bulleted list">
                            <i class="fa fa-list-ul"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Link">
                            <i class="fa fa-link"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Unlink">
                            <i class="fa fa-unlink"></i>
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default"  data-toggle="tooltip" title="Picture">
                            <i class="fa fa-picture-o"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="HTML table">
                            <i class="fa fa-table"></i>
                        </button>
                        <button type="button" class="btn btn-default" data-toggle="tooltip" title="Font">
                            <i class="fa fa-font"></i>
                        </button>
                    </div>
                </div>
                <div class="panel-body">
                    <h2>
                        Hello and welcome</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut <a href="http://www.jquery2dotnet.com/2013/12/brand-icons-design-using-css.html">Brand Icons Design Using Css</a> aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.</p>
                </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-success">
                        Publish</button>
                    <button type="button" class="btn btn-primary">
                        Save Draft</button>
                    <div class="pull-right">
                        <button type="button" class="btn btn-danger">
                            <i class="fa fa-trash-o"></i> Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('button').tooltip({container: 'body'});
    });
</script>
</body>
</html>