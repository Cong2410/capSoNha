@extends('layouts.apps')

@section('content')
  <div class="container">
    <div class="grid">
      <div class="grid__row contain">
        <div class="check-form">
          <form action="{{ route('documents.update',$document->id) }}" method="POST">
            @csrf
            @method('put')
          <div class="check-form__container">
            <div class="check-form__header">
              @role('expert')
              <h3 class="check-form__heading">Thụ lý hồ sơ</h3>
              @endrole
              <!-- Trưởng phòng -->
              @role('head-of-department')
              <h3 class="check-form__heading">Duyệt hồ sơ</h3>
              @endrole
            </div>
            <div class="check-form__form">
              <div class="check-form__group">
                <div class="check-form__label">Mã hồ sơ:</div>
                <input
                  type="text"
                  class="check-form__input "
                  name="idHoSo"
                  value="{{ $document->id}}"
                  placeholder="nhập mã hồ sơ. VD: 1"
                  disabled
                />
              </div>
              <div class="check-form__group">
                <div class="check-form__label">Tên chủ hộ:</div>
                <input
                  type="text"
                  class="check-form__input "
                  name="name"
                  value="{{$document->name}}"
                  placeholder="Nhập tên chủ hộ. VD: Nguyễn Văn A"
                  disabled
                />
              </div>
              <div class="check-form__group">
                <div class="check-form__label">Số thửa:</div>
                <input
                  type="text"
                  class="check-form__input "
                  name="pol"
                  value="{{$document->pol}}"
                  placeholder="Nhập số thửa đất. VD: 1"
                  disabled
                />
              </div>
              <div class="check-form__group">
                <div class="check-form__label">Số tờ:</div>
                <input
                  type="text"
                  class="check-form__input "
                  name="sheet"
                  value="{{$document->sheet}}"
                  placeholder="Nhập số tờ. VD: 1"
                  disabled
                />
              </div>
              <div class="check-form__group">
                <div class="check-form__label">Quận/Huyện:</div>
                <input
                  type="text"
                  class="check-form__input "
                  name="district"
                  value="{{$document->district}}"
                  disabled
                />
              </div>
              <div class="check-form__group">
                <div class="check-form__label">Phường/Xã:</div>
                <input
                  type="text"
                  class="check-form__input "
                  name="ward"
                  value="{{$document->ward}}"
                  placeholder="Nhập tên phường. VD: Bình Thọ"
                  disabled
                />
              </div>
              <div class="check-form__group check-form__group--wrap">
                <div class="check-form__label check-form__cmt">
                  Chuyên viên nhận xét<span class="red-mark">*</span>:
                </div>
                @if($errors->any() && auth()->user()->can('expert'))
                <div
                  class="check-form__cmt check-form__label check-form__msg--error"
                >
                  Chuyên viên vui lòng nhập nhận xét và tọa độ.
                </div>
                @endif
                <textarea
                  class="check-form__input check-form__textarea @role('expert') {{($errors->any())? "check-form__textarea--error" : ""}} @endrole"
                  name="expertCmt"
                  rows="4"
                  placeholder="Chuyên viên ghi nhận xét về hồ sơ vào đây."
                  @role('head-of-department')
                  disabled
                  @endrole
                >{{$document->expertCmt}}</textarea>
              </div>
              <div class="check-form__group">
                <div class="check-form__label">
                  Tọa độ<span class="red-mark">*</span>:
                </div>
                <input
                  type="text"
                  class="check-form__input @role('expert') {{($errors->any())? "check-form__textarea--error" : ""}} @endrole"
                  name="coordinate"
                  value="{{$document->coordinate}}"
                  placeholder="Chuyên viên điền tọa độ vào đây."
                  @role('head-of-department')
                  disabled
                  @endrole
                />
              </div>
              <!-- trưởng phòng -->
              @role('head-of-department')
              <div class="check-form__group check-form__group--wrap">
                <div class="check-form__label check-form__cmt">
                  Trưởng phòng nhận xét<span class="red-mark">*</span>:
                </div>
                @if($errors->any())
                <div
                  class="check-form__cmt check-form__label check-form__msg--error"
                >
                  Nếu trả về, vui lòng nhập lời nhận xét.
                </div>
                @endif
                <textarea
                  class="check-form__input check-form__textarea  {{($errors->any())? "check-form__textarea--error" : ""}} "
                  name="hodCmt"
                  rows="4"
                  placeholder="Chỉ nhập nếu từ chối duyệt. Hồ sơ sẽ được trả cho chuyên viên xem lại."
                ></textarea>
              </div>
              @endrole
            </div>
            <div class="check-form__control">
              @role('expert')
              <button class="btn btn--primary">Chuyển hồ sơ</button>
              @endrole
              <!-- trưởng phòng -->
              @role('head-of-department')
              <button class="btn btn--back" name="type" value="back">Trả lại</button>
              <button class="btn btn--primary" name="type" value="pass">Duyệt</button>
              @endrole
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection