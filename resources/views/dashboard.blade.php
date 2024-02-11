<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @can('admin')
    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Yetki</th>
                    <th scope="col">Email</th>
                    <th scope="col">Şifre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Admin</td>
                    <td>admin@gmail.com</td>
                    <td>123456</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Yazar</td>
                    <td>yazar@gmail.com</td>
                    <td>123456</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Kullanıcı</td>
                    <td>kullanici@gmail.com</td>
                    <td>123456</td>
                </tr>
            </tbody>
        </table>
    </div>
    @endcan

    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Yazar Adı</th>
                    <th scope="col">Makale Başlığı</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Ali Efe</td>
                    <td>Ödev Makalesi</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>İbrahim Yeşil</td>
                    <td>Ödev Veren</td>
                </tr>
            </tbody>
        </table>
    </div>

    @if(Auth::check() && Auth::user()->can('admin') || Auth::user()->can('yazar'))
    <div class="container mt-4">
        <table class="mx-auto">
            <tr>
                <td class="text-center">
                    <button class="btn btn-primary mx-2">Oluştur</button>
                    <button class="btn btn-secondary mx-2">Güncelle</button>
                    <button class="btn btn-danger mx-2">Sil</button>
                </td>
            </tr>
        </table>
    </div>
@endif
</x-app-layout>
