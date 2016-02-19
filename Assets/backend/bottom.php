</tbody>
</table>

// модальное окно начало
<a id="modal-942577" href="#modal-container-942577" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

<div class="modal fade" id="modal-container-942577" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Добавление / редактирование новости
                </h4>
            </div>
            <div class="modal-body">
                <!-- Тело модального окна -->

                <form role="form" method="post">
                    <div class="form-group">
                        <label for="title">
                           Заголовок новости
                        </label>
                        <input class="form-control" id="title" type="text" name="title"/>
                    </div>
                    <div class="form-group">

                        <label for="text">
                            Текст новости
                        </label>
                        <textarea class="form-control" rows="5" id="text" name="text"></textarea>
                    </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">
                    Save changes
                </button>
                </form>
            </div>
        </div>

    </div>

</div>
// модальное окно конец

</div>
</div>
</div>

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