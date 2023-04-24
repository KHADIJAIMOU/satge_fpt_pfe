@extends("auth.admin.base")
@section('title', 'Créer un nouvel Utilisateur.')
@section('content')
<a href="/admin/users" class="btn btn-secondary float-right">
    <i class="fa-solid fa-xmark"></i> Annuler
</a>
    <form method="post" action="{{ route('users.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">CD_ETAB</label>
                <input type="text" class="form-control" name="CD_ETAB" id="CD_ETAB" placeholder="Enter CD_ETAB"
                    value="{{ old('CD_ETAB') }}">
            </div>
            <div class="form-group">
                <label for="email">NOM_ETABL</label>
                <input type="text" class="form-control" name="NOM_ETABL" id="NOM_ETABL" placeholder="Enter NOM_ETABL"
                    value="{{ old('NOM_ETABL') }}">
            </div>
            <div class="form-group">
                <label for="email">NOM_ETABA</label>
                <input type="text" class="form-control" name="NOM_ETABA" id="NOM_ETABA" placeholder="Enter NOM_ETABA"
                    value="{{ old('NOM_ETABA') }}">
            </div>
            <div class="form-group">
                <label for="la_com">la_com</label>

                <select name="la_com" class="form-control"   >
                    <option value="تزنيت (البلدية)">تزنيت (البلدية)</option>
                    {{-- <option value="Simple">Simple</option> --}}
                    <option value="تافراوت (البلدية)">تافراوت (البلدية)</option>
                    <option value="الركادة">الركادة</option>
                    <option value="تارسوات">تارسوات</option>
                    <option value="تاسريرت">تاسريرت</option>
                    <option value="أفلا  اغير">أفلا  اغير</option>
                    <option value="ايريغ  نتاهلة">ايريغ  نتاهلة</option>
                    <option value="أيت وافقا"> أيت وافقا</option>
                    <option value="اثنين أداي">اثنين أداي</option>
                    <option value="انزي">انزي</option>
                    <option value="تيغمي">تيغمي</option>
                    <option value="اربعاء أيت أحمد">اربعاء أيت أحمد</option>
                    <option value="تيزغران">تيزغران</option>
                    <option value="أيت ايسافن">أيت ايسافن</option>
                    <option value="إد او كوكمار">إد او كوكمار</option>
                    <option value="سيدي أحمد أو موسى">سيدي أحمد أو موسى</option>
                    <option value="أربعاء رسموكة">أربعاء رسموكة</option>
                    <option value="المعدر الكبير">المعدر الكبير</option>
                    <option value="سيدي بوعبد اللي">سيدي بوعبد اللي</option>
                    <option value="بونعمان">بونعمان</option>
                    <option value="ويجان">ويجان</option>
                    <option value="اثنين اكلو">اثنين اكلو</option>
                    <option value="أربعاء الساحل">أربعاء الساحل</option>
                    <option value="املن">املن</option>
                    <option value="تفراوت المولود">تفراوت المولود</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ll_com">ll_com</label>

                <select name="ll_com" class="form-control"   >
                    <option value="Tiznit (Mun.)">Tiznit (Mun.)</option></option>
                    <option value="Tafraout (Mun.)">Tafraout (Mun.)</option></option>
                    <option value="Reggada">Reggada</option>
                    <option value="Tarsouat">Tarsouat</option>
                    <option value="Tassrirt">Tassrirt</option>
                    <option value="Afella Ighir">Afella Ighir</option></option>
                    <option value="Irigh N\'Tahala">Irigh N\'Tahala</option>
                    <option value="Ait Ouafqa"> Ait Ouafqa</option>
                    <option value="Tnine Aday">Tnine Aday</option>
                    <option value="Anzi">Anzi</option>
                    <option value="Tighmi">Tighmi</option>
                    <option value="Arbaa Ait Ahmed"></option>Arbaa Ait Ahmed</option>
                    <option value="Tizoughrane">Tizoughrane</option>
                    <option value="Ait Issafen">Ait Issafen</option>
                    <option value="Ida Ou Gougmar">Ida Ou Gougmar</option>
                    <option value="Sidi Ahmed Ou Moussa">Sidi Ahmed Ou Moussa</option>
                    <option value="Arbaa Rasmouka">Arbaa Rasmouka</option>
                    <option value="El Maader El Kabir">El Maader El Kabir</option>
                    <option value="Sidi Bouabdelli">Sidi Bouabdelli</option>
                    <option value="Bounaamane">Bounaamane</option>
                    <option value="Ouijjane">Ouijjane</option>
                    <option value="Tnine Aglou">Tnine Aglou</option>
                    <option value="Arbaa Sahel">Arbaa Sahel</option>
                    <option value="Ammelne">Ammelne</option>
                    <option value="Tafraout El Mouloud">Tafraout El Mouloud</option>
                </select>
            </div>
            <div class="form-group">
                <label for="typeEtab">Type Etablissement</label>

                <select name="typeEtab" class="form-control"   >
                    <option value="Public">Public</option>
                    {{-- <option value="Simple">Simple</option> --}}
                    <option value="Privé">Privé</option>
                </select>
            </div>
            <div class="form-group">
                <label for="LL_CYCLE">LL_CYCLE</label>

                <select name="LL_CYCLE" class="form-control"   >
                    <option value="PRIMAIRE">PRIMAIRE</option>
                    <option value="SECONDAIRE-COLLEGIAL">SECONDAIRE-COLLEGIAL</option>
                    <option value="SECONDAIRE QUALIFIANT">SECONDAIRE QUALIFIANT</option>
                    <option value="BTS">BTS</option>
                </select>
            </div>
            <div class="form-group">
                <label for="LA_CYCLE">LA_CYCLE</label>

                <select name="LA_CYCLE" class="form-control"   >
                    <option value="الابتدائي">الابتدائي</option>
                    <option value="الثانوي الاعدادي">الثانوي الاعدادي</option>
                    <option value="الثانوي التأهيلي">الثانوي التأهيلي</option>
                    <option value="شهادة التقني العالي">شهادة التقني العالي</option>
                </select>
            </div>
            <div class="form-group">
                <label for="NetabFr">NetabFr</label>

                <select name="NetabFr" class="form-control"   >
                    <option value="Satellite">Satellite</option>
                    <option value="Ecole Autonome">Ecole Autonome</option>
                    <option value="Annexe Ecole Autonome">Annexe Ecole Autonome</option>
                    <option value="Collège Enseignement Général">Collège Enseignement Général</option>
                    <option value="Lycée Enseignement Général">Lycée Enseignement Général</option>
                    <option value="Ecole communale">Ecole communale</option>
                    <option value="Secteur Scolaire Centre">Secteur Scolaire Centre</option>
                    <option value="Annexe Collège Enseignement Général">Annexe Collège Enseignement Général</option>
                    <option value="Annexe Lycée Enseignement Général">Annexe Lycée Enseignement Général</option>
                    <option value="Annexe Ecole Autonome">Annexe Ecole Autonome</option>
                    <option value="Lycée Enseignement Général & Technique">Lycée Enseignement Général & Technique</option>
                    <option value="Délégation">Délégation</option>
                </select>
            </div>
            <div class="form-group">
                <label for="CD_GIPE">CD_GIPE</label>
                <input type="text" class="form-control" name="CD_GIPE" id="CD_GIPE" placeholder="Enter CD_GIPE"
                    value="{{ old('CD_GIPE') }}">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" name="password" id="CD_ETAB" placeholder="Enter password"
                    value="{{ old('password') }}">
            </div>


        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-lg btn-success float-right">Ajouter Un Nouvel Utilisateur
</button>
        </div>
    </form>
@endsection
