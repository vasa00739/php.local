 <form role="form" method="post" action="edit.php">
     <input type="hidden" name="id" value="<? echo $news[0]->id; ?>">
                    <div class="form-group">
                        <label for="title">
                           Заголовок новости
                        </label>
                        <input class="form-control" id="title" type="text" name="title" value="<? echo $news[0]->title; ?>" />
                    </div>
                    <div class="form-group">

                        <label for="text">
                            Текст новости
                        </label>
                        <textarea class="form-control" rows="5" id="text" name="text"><?=$news[0]->text?></textarea>
                    </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">
                    Save changes
                </button>
                </form>

<script type="text/javascript" src="Assets/Bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="Assets/Bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Assets/Bootstrap/js/scripts.js"></script>

<script type="text/javascript" src="Assets/Bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="Assets/Bootstrap/js/locales/bootstrap-datetimepicker.ru.js" charset="UTF-8"></script>

<script type="text/javascript">
    $('.form_date').datetimepicker({
        language:  'ru',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>

</body>
</html>