<div>
   <article class="card" x-data="{open:false}">
       <div class="card-body bg-gray-100">
        <header>
            <h1 x-on:click="open=!open" class="cursor-pointer">Lesson - description</h1>
        </header>

        <div x-show="open">
            <hr class="my-2">
            @if($lesson->description)
                <form wire:submit.prevent="update">

                    <textarea wire:model="description.name" class="form-input w-full" id="" cols="30" rows="3"></textarea>
                    @error('description.name')
                        <span class="text-sm text-red-500">{{$message}}</span>
                    @enderror
                    <div class="flex justify-end">
                        <button wire:click="destroy" class="btn btn-danger text-sm" type="button">削除</button>
                        <button class="btn btn-primary text-sm ml-2" type="submit">更新</button>
                    </div>
                </form>
            @else
            <div>

                <textarea wire:model="name" placeholder="レッスンの説明を入力できます" class="form-input w-full" id="" cols="30" rows="3"></textarea>
                @error('name')
                    <span class="text-sm text-red-500">{{$message}}</span>
                @enderror
                <div class="flex justify-end">
                    <button wire:click="store" class="btn btn-primary text-sm ml-2" type="submit">登録</button>
                </div>
            </div>
            @endif
        </div>
       </div>
   </article>
</div>
