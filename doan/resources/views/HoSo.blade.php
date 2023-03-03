
@extends('partials.app')
@section('content')

    <section>
        <div class="profile">
            
            <div class="right-col">
                <p class="user-info-name">THÔNG TIN CÁ NHÂN</p>
                <div class="form-group">
                    <div class="field">
                        <input id="name" type="text" name="name" disabled="disabled" class="group-item">
                        <label for="name" title="Họ và tên: Tuong Vy" data-title="Họ và tên:"></label>
                        <div onclick="toggleEnable('name')" class="icon">                  
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <input id="sdt" type="text" name="sdt" disabled="disabled" class="group-item">
                        <label for="sdt" title="Số điện thoại: 0941572957" data-title="Số điện thoại:"></label>
                        <div onclick="toggleEnable('sdt')" class="icon">
                           
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <input disabled="disabled" class="group-item">
                        <label title="Địa chỉ : 99, nguyen cu trinh quan 1"
                            data-title="Số điện thoại:"></label>
                        <div class="icon">
                           
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <input disabled="disabled" class="group-item">
                        <label title="Mật Khẩu"></label>
                        <div class="icon">
                            
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field">
                        <input disabled="disabled" class="group-item">
                        <label title="Nhập lại mật Khẩu"></label>
                        <div class="icon">
                            
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="btn-form-submit">Cập nhật thông tin</div>
                </div>
    
            </div>
        </div>
    </section>
@endsection