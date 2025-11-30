@extends("Home.base")
@section('content')
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2 style="color: black">لائحة الشكايات</h2>
                    <div class="bt-option">
                        <a href="/" style="color: black">الرئيسية</a>
                        <a href="#" style="color: black">القوائم</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Class Timetable Section Begin -->
<section class="class-timetable-section class-details-timetable spad">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="class-details-timetable_title text-right mb-4">
                    <button type="button" class="penn-btn-teal" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-plus ml-2"></i> إضافة شكاية جديدة
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="penn-table-wrapper" dir="rtl">
                    <table class="penn-table">
                        <thead>
                            <tr>
                                <th>الاسم الكامل</th>
                                <th>المؤسسة</th>
                                <th width="40%">المحتوى</th>
                                <th>الحالة</th>
                                <th>التاريخ</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reclamation as $item)
                            <tr id="reclamation_id_{{ $item->users_id }}">
                                <td><strong>{{ $item->first_name }} {{ $item->last_name }}</strong></td>
                                <td>{{ $item->NOM_ETABL }}</td>
                                <td>{{ $item->content }}</td>
                                <td>
                                    <span class="penn-badge penn-badge-{{ ($item->status == 2) ? 'danger' : (($item->status == 0) ? 'warning' : 'success') }}">
                                        {{$item->getStatus($item->status)}}
                                    </span>
                                </td>
                                <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                <td>
                                    <form action="{{route('destroyreclamation',$item->id)}}" method="post" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="penn-action-btn penn-action-btn-danger" onclick="return confirm('هل أنت متأكد؟')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-4 d-flex justify-content-center">
                        {!! $reclamation->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding Complaint -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" dir="rtl">
                    <h5 class="modal-title" id="exampleModalLabel">إضافة شكاية جديدة</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin: -1rem auto -1rem -1rem;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" dir="rtl">
                    <form method="post" action="{{ route('storereclamation', $idd) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="users_id" value="{{$idd}}">

                        <div class="form-group mb-3">
                            <label for="first_name" class="mb-2 text-muted">الاسم الشخصي</label>
                            <input type="text" class="penn-input" name="first_name" placeholder="الاسم الشخصي" value="{{ old('first_name') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="last_name" class="mb-2 text-muted">الاسم العائلي</label>
                            <input type="text" class="penn-input" name="last_name" placeholder="الاسم العائلي" value="{{ old('last_name') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="CNI" class="mb-2 text-muted">رقم البطاقة الوطنية</label>
                            <input type="text" class="penn-input" name="CNI" placeholder="رقم البطاقة الوطنية" value="{{ old('CNI') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="phone" class="mb-2 text-muted">رقم الهاتف</label>
                            <input type="text" class="penn-input" name="phone" placeholder="رقم الهاتف" value="{{ old('phone') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="content" class="mb-2 text-muted">محتوى الشكاية</label>
                            <textarea class="penn-input" name="content" id="content" rows="4" placeholder="أدخل المحتوى" required>{{ old('content') }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="ll_com" class="mb-2 text-muted">اختيار الجماعة</label>
                            <select name="ll_com" class="penn-input" required>
                                <option value="تزنيت (البلدية)">تزنيت (البلدية)</option>
                                <option value="تافراوت (البلدية)">تافراوت (البلدية)</option>
                                <!-- Add other options here -->
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="NOM_ETABL" class="mb-2 text-muted">اسم المؤسسة</label>
                            <input type="text" class="penn-input" name="NOM_ETABL" placeholder="اسم المؤسسة" value="{{ old('NOM_ETABL') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="images" class="mb-2 text-muted">المرفقات</label>
                            <input type="file" class="penn-input" name="images[]" multiple accept="image/*" required>
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">إلغاء</button>
                            <button type="submit" class="penn-btn-teal" style="width: auto; padding: 10px 30px;">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection