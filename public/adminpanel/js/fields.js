$(function(){
    $('.btn-add-item').click(function(){
        console.log('hello');
       $('form .item').append(`
       <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">عنوان </label>
                                        <input type="text" maxlength="500" name="field_mean[]" class="form-control" id="exampleInputEmail1" placeholder="عنوان
" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">نام فیلد
                                        </label>
                                        <input type="text" maxlength="50" name="field_name[]" class="form-control" id="exampleInputEmail1" placeholder="نام فیلد

" required>
                                    </div>
                                    <div class="form-group">
                                        <label>نوع</label>
                                        <select name="type_id[]" class="form-control">
                                            ${ types}
                                        </select>
                                    </div>
                                </div>`);
    });
})
