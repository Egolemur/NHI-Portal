@extends('layouts.main')

@section('cover')
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Name</label>
                <input id="name" name="name" type="text" placeholder="Your name" value="{{old('name')}}" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror">
                @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            {{-- <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">Username</label>
                <input id="username" name="username" type="text" placeholder="Your username" value="{{old('username')}}" class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror">
                @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div> --}}
            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">email</label>
                <input id="email" name="email" type="email" placeholder="Your email" value="{{old('email')}}" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror">
                @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">password</label>
                <input id="password" name="password" type="password" placeholder="Your password" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror">
                @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                @enderror
            </div> 
            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Repeat your password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Your password" class="border p-3 w-full rounded-lg @error('password-confirmation') border-red-500 @enderror">
            </div>
            <input type="submit" value="Create account" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"> 
        </form>
    </div>
@endsection