@extends("auth.admin.base")
@section('title', "Modifier L'utilisateur")
@section('content')
<a href="/admin/users" class="btn btn-secondary float-right">
    <i class="fa-solid fa-arrow-left"></i> précédent
</a>
    <form method="post" action="{{ route('users.update', $User->id) }}">
        @csrf
        @method("PUT")
        <div class="card-body">
            <div class="form-group">
                <label for="name">CD_ETAB</label>
                <input type="text" class="form-control" name="CD_ETAB" id="CD_ETAB" placeholder="Enter CD_ETAB"
                    value="{{  $User->CD_ETAB  }}">
            </div>
            <div class="form-group">
                <label for="email">NOM_ETABL</label>
                <input type="text" class="form-control" name="NOM_ETABL" id="NOM_ETABL" placeholder="Enter NOM_ETABL"
                    value="{{  $User->NOM_ETABL  }}">
            </div>
            <div class="form-group">
                <label for="email">NOM_ETABA</label>
                <input type="text" class="form-control" name="NOM_ETABA" id="NOM_ETABA" placeholder="Enter NOM_ETABA"
                    value="{{  $User->NOM_ETABA  }}">
            </div>
            <div class="form-group">
                <label for="la_com">la_com</label>

                <select name="la_com" class="form-control"   >
                    <option {{ ($User->la_com) == 'تزنيت (البلدية)' ? 'selected' : '' }}  value="تزنيت (البلدية)">تزنيت (البلدية)</option>
                    <option  {{ ($User->la_com) == 'تافراوت (البلدية)' ? 'selected' : '' }}  value="تافراوت (البلدية)">تافراوت (البلدية)</option>
                    <option   {{ ($User->la_com) == 'الركادة' ? 'selected' : '' }}  value="الركادة">الركادة</option>
                    <option  {{ ($User->la_com) == 'تارسوات' ? 'selected' : '' }}  value="تارسوات">تارسوات</option>
                    <option   {{ ($User->la_com) == 'تاسريرت' ? 'selected' : '' }} value="تاسريرت">تاسريرت</option>
                    <option {{ ($User->la_com) == 'أفلا  اغير"' ? 'selected' : '' }}  value="أفلا  اغير">أفلا  اغير</option>
                    <option {{ ($User->la_com) == 'ايريغ  نتاهلة"' ? 'selected' : '' }}  value="ايريغ  نتاهلة">ايريغ  نتاهلة</option>
                    <option {{ ($User->la_com) == 'أيت وافقا' ? 'selected' : '' }}  value="أيت وافقا"> أيت وافقا</option>
                    <option {{ ($User->la_com) == 'اثنين أداي' ? 'selected' : '' }}  value="اثنين أداي">اثنين أداي</option>
                    <option {{ ($User->la_com) == 'انزي' ? 'selected' : '' }}  value="انزي">انزي</option>
                    <option {{ ($User->la_com) == 'تيغمي' ? 'selected' : '' }}  value="تيغمي">تيغمي</option>
                    <option {{ ($User->la_com) == 'اربعاء أيت أحمد' ? 'selected' : '' }}  value="اربعاء أيت أحمد">اربعاء أيت أحمد</option>
                    <option {{ ($User->la_com) == 'تيزغران' ? 'selected' : '' }}  value="تيزغران">تيزغران</option>
                    <option {{ ($User->la_com) == 'أيت ايسافن' ? 'selected' : '' }}  value="أيت ايسافن">أيت ايسافن</option>
                    <option {{ ($User->la_com) == 'إد او كوكمار' ? 'selected' : '' }}  value="إد او كوكمار">إد او كوكمار</option>
                    <option {{ ($User->la_com) == 'سيدي أحمد أو موسى' ? 'selected' : '' }}  value="سيدي أحمد أو موسى">سيدي أحمد أو موسى</option>
                    <option {{ ($User->la_com) == 'أربعاء رسموكة' ? 'selected' : '' }}  value="أربعاء رسموكة">أربعاء رسموكة</option>
                    <option {{ ($User->la_com) == 'المعدر الكبير' ? 'selected' : '' }}  value="المعدر الكبير">المعدر الكبير</option>
                    <option {{ ($User->la_com) == 'سيدي بوعبد اللي' ? 'selected' : '' }}  value="سيدي بوعبد اللي">سيدي بوعبد اللي</option>
                    <option {{ ($User->la_com) == 'بونعمان' ? 'selected' : '' }}  value="بونعمان">بونعمان</option>
                    <option {{ ($User->la_com) == 'ويجان' ? 'selected' : '' }}  value="ويجان">ويجان</option>
                    <option {{ ($User->la_com) == 'اثنين اكلو' ? 'selected' : '' }}  value="اثنين اكلو">اثنين اكلو</option>
                    <option {{ ($User->la_com) == 'أربعاء الساحل' ? 'selected' : '' }}  value="أربعاء الساحل">أربعاء الساحل</option>
                    <option {{ ($User->la_com) == 'املن' ? 'selected' : '' }}  value="املن">املن</option>
                    <option {{ ($User->la_com) == 'تفراوت المولود' ? 'selected' : '' }}  value="تفراوت المولود">تفراوت المولود</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ll_com">ll_com</label>

                <select name="ll_com" class="form-control"   >
                    <option {{ ($User->ll_com) == 'Tiznit (Mun.)' ? 'selected' : '' }}  value="Tiznit (Mun.)">Tiznit (Mun.)</option></option>
                    <option {{ ($User->ll_com) == 'Tafraout (Mun.)' ? 'selected' : '' }}  value="Tafraout (Mun.)">Tafraout (Mun.)</option></option>
                    <option {{ ($User->ll_com) == 'Reggada' ? 'selected' : '' }}  value="Reggada">Reggada</option>
                    <option {{ ($User->ll_com) == 'Tarsouat' ? 'selected' : '' }}  value="Tarsouat">Tarsouat</option>
                    <option {{ ($User->ll_com) == 'Tassrirt' ? 'selected' : '' }}  value="Tassrirt">Tassrirt</option>
                    <option {{ ($User->ll_com) == 'Afella Ighir' ? 'selected' : '' }}  value="Afella Ighir">Afella Ighir</option></option>
                    <option {{ ($User->ll_com) == 'Irigh N\'Tahala' ? 'selected' : '' }}  value="Irigh N\'Tahala">Irigh N\'Tahala</option>
                    <option {{ ($User->ll_com) == 'Ait Ouafqa' ? 'selected' : '' }}  value="Ait Ouafqa"> Ait Ouafqa</option>
                    <option {{ ($User->ll_com) == 'Tnine Aday' ? 'selected' : '' }}  value="Tnine Aday">Tnine Aday</option>
                    <option {{ ($User->ll_com) == 'Anzi' ? 'selected' : '' }}  value="Anzi">Anzi</option>
                    <option {{ ($User->ll_com) == 'Tighmi' ? 'selected' : '' }}  value="Tighmi">Tighmi</option>
                    <option {{ ($User->ll_com) == 'Arbaa Ait Ahmed' ? 'selected' : '' }}  value="Arbaa Ait Ahmed"></option>Arbaa Ait Ahmed</option>
                    <option {{ ($User->ll_com) == 'Tizoughrane' ? 'selected' : '' }}  value="Tizoughrane">Tizoughrane</option>
                    <option {{ ($User->ll_com) == 'Ait Issafen' ? 'selected' : '' }}  value="Ait Issafen">Ait Issafen</option>
                    <option {{ ($User->ll_com) == 'Ida Ou Gougmar' ? 'selected' : '' }}  value="Ida Ou Gougmar">Ida Ou Gougmar</option>
                    <option {{ ($User->ll_com) == 'Sidi Ahmed Ou Moussa' ? 'selected' : '' }}  value="Sidi Ahmed Ou Moussa">Sidi Ahmed Ou Moussa</option>
                    <option {{ ($User->ll_com) == 'Arbaa Rasmouka' ? 'selected' : '' }}  value="Arbaa Rasmouka">Arbaa Rasmouka</option>
                    <option {{ ($User->ll_com) == 'El Maader El Kabir' ? 'selected' : '' }}  value="El Maader El Kabir">El Maader El Kabir</option>
                    <option {{ ($User->ll_com) == 'Sidi Bouabdelli' ? 'selected' : '' }}  value="Sidi Bouabdelli">Sidi Bouabdelli</option>
                    <option {{ ($User->ll_com) == 'Bounaamane' ? 'selected' : '' }}  value="Bounaamane">Bounaamane</option>
                    <option {{ ($User->ll_com) == 'Ouijjane' ? 'selected' : '' }}  value="Ouijjane">Ouijjane</option>
                    <option {{ ($User->ll_com) == 'Tnine Aglou' ? 'selected' : '' }}  value="Tnine Aglou">Tnine Aglou</option>
                    <option {{ ($User->ll_com) == 'Arbaa Sahel' ? 'selected' : '' }}  value="Arbaa Sahel">Arbaa Sahel</option>
                    <option {{ ($User->ll_com) == 'Ammelne' ? 'selected' : '' }}  value="Ammelne">Ammelne</option>
                    <option {{ ($User->ll_com) == 'Tafraout El Mouloud' ? 'selected' : '' }}  value="Tafraout El Mouloud">Tafraout El Mouloud</option>
                </select>
            </div>
            <div class="form-group">
                <label for="typeEtab">Type Etablissement</label>

                <select name="typeEtab" class="form-control"   >
                    <option {{ ($User->typeEtab) == 'Public' ? 'selected' : '' }}  value="Public">Public</option>
                    <option {{ ($User->typeEtab) == 'Privé' ? 'selected' : '' }}  value="Privé">Privé</option>
                </select>
            </div>
            <div class="form-group">
                <label for="LL_CYCLE">LL_CYCLE</label>

                <select name="LL_CYCLE" class="form-control"   >
                    <option {{ ($User->LL_CYCLE) == 'PRIMAIRE' ? 'selected' : '' }}  value="PRIMAIRE">PRIMAIRE</option>
                    <option {{ ($User->LL_CYCLE) == 'SECONDAIRE-COLLEGIAL' ? 'selected' : '' }}  value="SECONDAIRE-COLLEGIAL">SECONDAIRE-COLLEGIAL</option>
                    <option {{ ($User->LL_CYCLE) == 'SECONDAIRE QUALIFIANT' ? 'selected' : '' }}  value="SECONDAIRE QUALIFIANT">SECONDAIRE QUALIFIANT</option>
                    <option {{ ($User->LL_CYCLE) == 'BTS' ? 'selected' : '' }}  value="BTS">BTS</option>
                </select>
            </div>
            <div class="form-group">
                <label for="LA_CYCLE">LA_CYCLE</label>

                <select name="LA_CYCLE" class="form-control"   >
                    <option {{ ($User->LA_CYCLE) == 'الابتدائي' ? 'selected' : '' }}  value="الابتدائي">الابتدائي</option>
                    <option {{ ($User->LA_CYCLE) == 'الثانوي الاعدادي' ? 'selected' : '' }}  value="الثانوي الاعدادي">الثانوي الاعدادي</option>
                    <option {{ ($User->LA_CYCLE) == 'الثانوي التأهيلي' ? 'selected' : '' }}  value="الثانوي التأهيلي">الثانوي التأهيلي</option>
                    <option {{ ($User->LA_CYCLE) == 'شهادة التقني العالي' ? 'selected' : '' }}  value="شهادة التقني العالي">شهادة التقني العالي</option>
                </select>
            </div>
            <div class="form-group">
                <label for="NetabFr">NetabFr</label>

                <select name="NetabFr" class="form-control"   >
                    <option {{ ($User->NetabFr) == 'Satellite' ? 'selected' : '' }}  value="Satellite">Satellite</option>
                    <option {{ ($User->NetabFr) == 'Ecole Autonome' ? 'selected' : '' }}  value="Ecole Autonome">Ecole Autonome</option>
                    <option {{ ($User->NetabFr) == 'Annexe Ecole Autonome' ? 'selected' : '' }}  value="Annexe Ecole Autonome">Annexe Ecole Autonome</option>
                    <option {{ ($User->NetabFr) == 'Collège Enseignement Général' ? 'selected' : '' }}  value="Collège Enseignement Général">Collège Enseignement Général</option>
                    <option {{ ($User->NetabFr) == 'Lycée Enseignement Général' ? 'selected' : '' }}  value="Lycée Enseignement Général">Lycée Enseignement Général</option>
                    <option {{ ($User->NetabFr) == 'Ecole communale' ? 'selected' : '' }}  value="Ecole communale">Ecole communale</option>
                    <option {{ ($User->NetabFr) == 'Secteur Scolaire Centre' ? 'selected' : '' }}  value="Secteur Scolaire Centre">Secteur Scolaire Centre</option>
                    <option {{ ($User->NetabFr) == 'Annexe Collège Enseignement Général' ? 'selected' : '' }}  value="Annexe Collège Enseignement Général">Annexe Collège Enseignement Général</option>
                    <option {{ ($User->NetabFr) == 'Annexe Lycée Enseignement Général' ? 'selected' : '' }}  value="Annexe Lycée Enseignement Général">Annexe Lycée Enseignement Général</option>
                    <option {{ ($User->NetabFr) == 'Annexe Ecole Autonome' ? 'selected' : '' }}  value="Annexe Ecole Autonome">Annexe Ecole Autonome</option>
                    <option {{ ($User->NetabFr) == 'Lycée Enseignement Général & Technique' ? 'selected' : '' }}  value="Lycée Enseignement Général & Technique">Lycée Enseignement Général & Technique</option>
                    <option {{ ($User->NetabFr) == 'Délégation' ? 'selected' : '' }}  value="Délégation">Délégation</option>
                </select>
            </div>
            <div class="form-group">
                <label for="CD_GIPE">CD_GIPE</label>
                <input type="text" class="form-control" name="CD_GIPE" id="CD_GIPE" placeholder="Enter CD_GIPE"
                    value="{{  $User->CD_GIPE  }}">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" name="password" id="CD_ETAB" placeholder="Enter password"
                    value="{{  $User->password  }}">
            </div>


        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-lg btn-success float-right">Ajouter Un Nouvel Utilisateur
</button>
        </div>
    </form>
@endsection
