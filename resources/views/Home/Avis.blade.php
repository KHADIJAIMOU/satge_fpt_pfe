@extends("Home.base")
{{--@section('title', 'progress details')--}}
@section('content')
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2 style="color: black"> لائحة الاراء</h2>
                    <div class="bt-option">
                        <a href="/" style="color: black">الرئيسية</a>
                        <a href="#" style="color: black">القوائم</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Class Details Section Begin -->


<!-- Class Timetable Section Begin -->
<!-- Class Timetable Section Begin -->
<section class="class-timetable-section class-details-timetable spad">
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="class-details-timetable_title text-right mb-4">
                    <button type="button" class="penn-btn-teal" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-plus ml-2"></i> إضافة رأي جديد
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
                                <th>الموضوع</th>
                                <th>النوع</th>
                                <th width="40%">التفاصيل</th>
                                <th>التاريخ</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($avis as $avi)
                            <tr id="avi_id_{{ $avi->users_id }}">
                                <td><strong>{{ $avi->objet }}</strong></td>
                                <td>
                                    <span class="penn-badge penn-badge-success">{{ $avi->type }}</span>
                                </td>
                                <td>{{ $avi->detail }}</td>
                                <td>{{($avi->created_at)->format('d-m-Y') }}</td>
                                <td>
                                    <form action="{{route('destroyAvis', $avi->id) }}" method="post" style="display:inline;">
                                        @csrf
                                        @method("DELETE")
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
                        {!! $avis->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" dir="rtl">
                    <h5 class="modal-title" id="exampleModalLabel">إضافة رأي جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin: -1rem auto -1rem -1rem;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" dir="rtl">
                    <form method="post" action="{{route('storeAvis',$idd)}}">
                        @csrf
                        @method('POST')

                        <div class="form-group mb-3">
                            <label for="objet" class="mb-2 text-muted">الموضوع</label>
                            <input type="text" class="penn-input" name="objet" id="objet" placeholder="أدخل الموضوع" value="{{ old('objet') }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="type" class="mb-2 text-muted">النوع</label>
                            <select name="type" class="penn-input">
                                <option value="Etablissement">المؤسسة</option>
                                <option value="Direction provinciale">المديرية الإقليمية</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="detail" class="mb-2 text-muted">التفاصيل</label>
                            <textarea class="penn-input" name="detail" id="detail" rows="4" placeholder="أدخل التفاصيل" required>{{ old('detail') }}</textarea>
                        </div>

                        <div class="form-group mb-4">
                            <label for="date" class="mb-2 text-muted">التاريخ</label>
                            <input type="date" class="penn-input" name="date" id="date" value="{{ old('date') }}" required>
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