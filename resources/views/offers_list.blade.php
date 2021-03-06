<x-app-layout>
    <x-slot name="header">Offer List</x-slot>

    <div class="card">
        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <strong>{{ session('success') }}</strong>
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Company</th>
                        <th scope="col">City</th>
                        <th scope="col">latitude</th>
                        <th scope="col">longitude</th>
                        <th scope="col">radius</th>
                        <th scope="col">Price</th>
                        <th scope="col">Currency</th>
                        <th scope="col">operation</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($offers as $offer)
                        <tr>
                            <td>{{ $offer->id }}</td>
                            <td>{{ $offer->company->name }}</td>
                            <td>{{ isset($offer->city->name) ? $offer->city->name : ''}}</td>
                            <td>{{ $offer->latitude }}</td>
                            <td>{{ $offer->longitude }}</td>
                            <td>{{ $offer->radius }}</td>
                            <td>{{ $offer->price }}</td>
                            <td>{{ $offer->currency->name }}</td>
                            <td>
                                <a href="{{ route('offers.edit', $offer->id) }}" class="btn btn-primary">edit</a>
                                <a href="{{ route('offers.destroy', $offer->id) }}" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $offers->links() }}
        </div>
    </div>

    <x-slot name="js"></x-slot>
</x-app-layout>
