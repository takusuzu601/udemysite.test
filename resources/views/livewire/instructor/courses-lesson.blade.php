<div>
   @foreach($section->lessons as $item)
       <article class="card mt-4" x-data="{open: false}">
           <div class="card-body">
            @if($lesson->id==$item->id)
              <form wire:submit.prevent="update">
                  <div class="flex items-center">
                      <label for="" class="w-32">NAME:</label>
                      <input wire:model="lesson.name" type="text" class="form-input w-full">
                  </div>
                  @error('lesson.name')
                    <span class="text-sm text-red-500">{{$message}}</span>
                  @enderror

                <div class="flex items-center">
                    <label for="" class="w-32">Platform:</label>
                    <select wire:model="lesson.platform_id" class="mt-4 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        @foreach($platforms as $platform)
                            <option value="{{$platform->id}}">{{$platform->name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('lesson.platform_id')
                  <span class="text-sm text-red-500">{{$message}}</span>
                @enderror

                  <div class="flex items-center mt-4">
                    <label for="" class="w-32">URL:</label>
                    <input wire:model="lesson.url" type="text" class="form-input w-full">
                </div>
                @error('lesson.url')
                  <span class="text-sm text-red-500">{{$message}}</span>
                @enderror

                <div class="mt-4 flex justify-end">
                    <button type="button" class="btn btn-danger" wire:click="cancel">キャンセル</button>
                    <button type="submit" class="btn btn-primary ml-2" >更新</button>
                </div>

              </form>
            @else
            <header>
                <h1 x-on:click="open= !open" class="cursor-pointer">
                    <i class="far fa-play-circle text-blue-500 mr-1"></i>Leccion:  {{$item->name}}
                </h1>
              </header>

              <div x-show="open">
                  <hr class="my-2">
                  <p class="text-sm">Platform:{{$item->platform->name}}</p>
                  <p class="text-sm">LINK:<a class="text-blue-600" href="{{$item->url}}" targe="_blank">{{$item->url}}</a></p>

                  <div class="my-2">
                      <button class="btn btn-primary text-sm" wire:click="edit({{$item}})">編集</button>
                      <button class="btn btn-danger text-sm" wire:click="destroy({{$item}})">削除</button>
                  </div>

                  <div class="mb-4">
                        @livewire('instructor.lesson-description',['lesson'=>$item],key('lesson-description-'.$item->id))
                  </div>

                  <div>
                    @livewire('instructor.lesson-resources',['lesson'=>$item],key('lesson-resources-'.$item->id))
                  </div>

              </div>
            @endif
           </div>
       </article>
   @endforeach

   <div class="mt-4" x-data="{open:false}">
    <a x-show="!open" x-on:click="open=true" class="flex items-center cursor-pointer">
        <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
        Agregar nueve Lesson
    </a>
    <article class="card" x-show="open">
        <div class="card-body">
            <h1 class="text-xl font-bold mb-4">Aguregar nueve LEsson</h1>
            <div class="mb-4">
                <div class="flex items-center">
                    <label for="" class="w-32">NAME:</label>
                    <input wire:model="name" type="text" class="form-input w-full">
                </div>
                @error('name')
                  <span class="text-sm text-red-500">{{$message}}</span>
                @enderror

              <div class="flex items-center">
                  <label for="" class="w-32">Platform:</label>
                  <select wire:model="platform_id" class="mt-4 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      @foreach($platforms as $platform)
                          <option value="{{$platform->id}}">{{$platform->name}}</option>
                      @endforeach
                  </select>
              </div>

              @error('platform_id')
                <span class="text-sm text-red-500">{{$message}}</span>
              @enderror

                <div class="flex items-center mt-4">
                  <label for="" class="w-32">URL:</label>
                  <input wire:model="url" type="text" class="form-input w-full">
              </div>
              @error('url')
                <span class="text-sm text-red-500">{{$message}}</span>
              @enderror

            </div>
            <div class="flex justify-end">
                <button class="btn btn-danger" x-on:click="open=false">Cancelar</button>
                <button class="btn btn-primary ml-2" wire:click="store()">Agreagr</button>
            </div>
        </div>
    </article>
 </div>

</div>
