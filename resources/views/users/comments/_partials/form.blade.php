<div class="w-full bg-white shadow-md rounded px-8 py-12">
    @csrf
    <textarea name="body" id="" cols="30" rows="10" placeholder="Comentário" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2"></textarea>
    <label for="visible">
        <input type="checkbox" name="visible">
        Visível?
    </label>
    <button class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
        Editar
    </button>
</div>
