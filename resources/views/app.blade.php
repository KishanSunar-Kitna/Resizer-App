@extends('layouts.master')
@section('content')
<div>
    <div class="main-container">
        <header class="bg-white mt-2 py-5 px-10 rounded-full border border-slate-200 shadow-sm">
            <span class="text-2xl font-bold">Image Resizer</span>
        </header>
    </div>
    </header>
    <div class="main-container">
        <div class="rounded-3xl mx-auto py-10 px-12 mt-5 shadow-xl bg-white border">
            <div class="border border-green-100 mb-10 {{ Session::get('message') ?  'block' : 'hidden' }}">
                @if($message = Session::get('message'))
                {{ $message }}
                <img src="/images/{{ Session::get('out_file') }}" class="w-[10rem]" />
                @endif

                @if($errors->any())
                @foreach($errors->all() as $error)
                {{ $error }}
                @endforeach
                @endif
            </div>
            <form action="{{ route('proceed_image') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ csrf_token() }}">
                <div class="grid md:grid-cols-[1fr,minmax(min-content,300px)] gap-10">
                    <div>
                        <div x-data @click="$refs.choose_photo"
                            class="rounded-lg border border-dashed border-slate-300 bg-slate-100 px-5 py-10">
                            <input x-ref="choose_photo" type="file" name="picture" accept="image/*" class="mb-5" />
                        </div>
                        </button>
                    </div>
                    <div>
                        <div class="mb-5" x-data="{ width: 400, height: 400 }">
                            <span class="block mb-5 font-bold text-slate-500">Manage dimensions</span>
                            <div class="grid grid-cols-[1fr,minmax(min-content,10px),1fr] gap-2 items-end">
                                <div>
                                    <label class="text-slate-500 font-semibold mb-1 text-sm block"
                                        for="inp-height">Height</label>
                                    <input :value="width" x-model="width" type="text" id="height" name="height"
                                        value="400" class="px-4 py-2 w-full border border-slate-300 rounded" />
                                </div>
                                <span class="pb-3 font-semibold text-slate-400">
                                    X
                                </span>
                                <div>
                                    <label class="text-slate-500 font-semibold mb-1 text-sm block"
                                        for="inp-width">Width</label>
                                    <input :value="height" x-model="height" type="text" id="width" name="width"
                                        value="400" class="px-4 py-2 w-full border border-slate-300 rounded" />
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full active:ring-2 active:ring-blue-600 active:ring-offset-2 bg-blue-600 hover:bg-blue-700 shadow-sm text-white rounded-2xl py-5 px-8 font-bold">Proceed</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop