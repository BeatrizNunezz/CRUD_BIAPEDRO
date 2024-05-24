<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Edit Product</h1>
                    <hr />
                    <form action="" method="POST"></form>
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Nome do produto</label>
                                <input type="text" name="title" class="form-control" placeholder="Nome do produto" value="">
                            </div>
                            <div class="col">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="title" class="form-control" placeholder="Nome" value="">
                            </div>
                            <div class="col">
                                <label class="form-label">Product Name</label>
                                <input type="text" name="Category" class="form-control" placeholder="Categoria" value="">
                            </div>


                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>