<div>
    <!-- Page header -->
    <div class="sm:flex sm:justify-between sm:items-center mb-8">

        <!-- Left: Title -->
        <div class="mb-4 sm:mb-0">
            <h1 class="text-2xl md:text-3xl text-slate-800 font-bold">Member ✨</h1>
        </div>

        <!-- Right: Actions -->
        <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">

            <!-- Delete button -->
            <x-actions.delete-button />

            <!-- Dropdown -->
            <x-date-select />

            <!-- Search form -->
            <x-search-form placeholder="Masukkan nama member" />

            <!-- Add member button -->
            <div x-data="{ modalOpen: false }">
                <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white" @click.prevent="modalOpen = true" aria-controls="tambah-modal">
                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden xs:block ml-2">Tambah Member</span>
                </button>
                <!-- Modal backdrop -->
                <div
                    class="fixed inset-0 bg-slate-900 bg-opacity-30 z-50 transition-opacity"
                    x-show="modalOpen"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-out duration-100"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    aria-hidden="true"
                    x-cloak
                ></div>
                <!-- Modal dialog -->
                <div
                    id="tambah-modal"
                    class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center px-4 sm:px-6"
                    role="dialog"
                    aria-modal="true"
                    x-show="modalOpen"
                    x-transition:enter="transition ease-in-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in-out duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-4"
                    x-cloak
                >
                    <div class="bg-white rounded shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                        <!-- Modal header -->
                        <div class="px-5 py-3 border-b border-slate-200">
                            <div class="flex justify-between items-center">
                                <div class="font-semibold text-slate-800">Tambah Member</div>
                                <button class="text-slate-400 hover:text-slate-500" @click="modalOpen = false">
                                    <div class="sr-only">Close</div>
                                    <svg class="w-4 h-4 fill-current">
                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- Modal content -->
                        <form action="{{ route('member.store') }}" method="post">
                            @csrf
                            <div class="px-5 py-4">
                                <div class="space-y-3">
                                    <div>
                                        <label class="block text-sm font-medium mb-1" for="name">Nama <span class="text-rose-500">*</span></label>
                                        <input id="name" name="name" class="form-input w-full px-2 py-1" type="text" required />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium mb-1" for="email">Email <span class="text-rose-500">*</span></label>
                                        <input id="email" name="email" class="form-input w-full px-2 py-1" type="email" required />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium mb-1" for="phone_number">Nomor HP <span class="text-rose-500">*</span></label>
                                        <input id="phone_number" name="phone_number" class="form-input w-full px-2 py-1" type="number" required />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium mb-1" for="store_name">Nama Toko <span class="text-rose-500">*</span></label>
                                        <input id="store_name" name="store_name" class="form-input w-full px-2 py-1" type="text" required />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium mb-1" for="location">Asal Kota <span class="text-rose-500">*</span></label>
                                        <input id="location" name="location" class="form-input w-full px-2 py-1" type="text" required />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium mb-1" for="packets_id">Paket <span class="text-rose-500">*</span></label>
                                        <select id="packets_id" name="packets_id" class="form-select text-sm py-2 w-full" required>
                                            @foreach ($packets as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div>
                                        <label class="block text-sm font-medium mb-1" for="status">Status <span class="text-rose-500">*</span></label>
                                        <select id="status" name="status" class="form-select text-sm py-2 w-full" required>
                                            <option value="Uji Coba">Uji Coba</option>
                                            <option value="Berlangganan">Berlangganan</option>
                                        </select>
                                    </div> --}}
                                    <div x-data="{ tab: 'trial' }">
                                        <label class="block text-sm font-medium mb-1" for="status">Apa status membernya?</label>
                                        <div class="flex flex-wrap items-center -m-3">
                                            <div class="m-3">
                                                <!-- Start -->
                                                <label class="flex items-center">
                                                    <input type="radio" name="radio-buttons" class="form-radio" checked @click="tab = 'trial'"/>
                                                    <span class="text-sm ml-2">Uji Coba</span>
                                                </label>
                                                <!-- End -->
                                            </div>
                                            <div class="m-3">
                                                <!-- Start -->
                                                <label class="flex items-center">
                                                    <input type="radio" name="radio-buttons" class="form-radio" @click="tab = 'subscribe'"/>
                                                    <span class="text-sm ml-2">Berlangganan</span>
                                                </label>
                                                <!-- End -->
                                            </div>
                                        </div>
                                        <div x-show="tab === 'trial'" class="mt-3">
                                            <label class="block text-sm font-medium mb-1" for="exp_trial">Exp. Uji Coba</label>
                                            <input id="exp_trial" name="exp_trial" class="form-input w-full px-2 py-1" type="date"/>
                                        </div>
                                        <div x-show="tab === 'subscribe'" class="mt-3">
                                            <label class="block text-sm font-medium mb-1" for="exp_subscribe">Exp. Berlangganan</label>
                                            <input id="exp_subscribe" name="exp_subscribe" class="form-input w-full px-2 py-1" type="date"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="px-5 py-4 border-t border-slate-200">
                                <div class="flex flex-wrap justify-end space-x-2">
                                    <button class="btn-sm border-slate-200 hover:border-slate-300 text-slate-600" @click="modalOpen = false">Batal</button>
                                    <button class="btn-sm bg-indigo-500 hover:bg-indigo-600 text-white">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>

    </div>

    <div class="bg-white shadow-lg rounded-sm border border-slate-200 mb-8">
        <header class="px-5 py-4">
            <h2 class="font-semibold text-slate-800">Semua Member <span class="text-slate-400 font-medium">{{ $members_count }}</span></h2>
        </header>
        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full divide-y divide-slate-200">
                <!-- Table header -->
                <thead class="text-xs uppercase text-slate-500 bg-slate-50 border-t border-slate-200">
                    <tr>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left">Nama</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left">Email</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left">Nomor HP</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left">Nama Toko</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left">Kota</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left">Paket</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left">Status</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left">Exp. Uji Coba</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left">Exp. Berlangganan</div>
                        </th>
                        <th class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                            <div class="font-semibold text-left">Aksi</div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                @foreach($customers as $customer)
                    <tbody class="text-sm">
                        <!-- Row -->
                        <tr>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                <div class="text-left font-medium text-slate-800">{{ $customer->name }}</div>
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                <div class="text-left font-medium text-slate-800">{{ $customer->email }}</div>
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                <div class="text-left font-medium text-slate-800">{{ $customer->phone_number }}</div>
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                <div class="text-left font-medium text-slate-800">{{ $customer->store_name }}</div>
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                <div class="text-left font-medium text-slate-800">{{ $customer->location }}</div>
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                <div class="text-left font-medium text-emerald-500">{{ $customer->packet->name }}</div>
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                <div class="text-left font-medium text-sky-500">{{ $customer->status }}</div>
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                @if ($customer->exp_trial != null)
                                    <div>{{ \Carbon\Carbon::parse($customer->exp_trial)->format('d/m/Y') }}</div>
                                @else
                                    <div class="text-left font-medium text-slate-800">-</div>
                                @endif
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap">
                                @if ($customer->exp_subscribe != null)
                                    <div>{{ \Carbon\Carbon::parse($customer->exp_subscribe)->format('d/m/Y') }}</div>
                                @else
                                    <div class="text-left font-medium text-slate-800">-</div>
                                @endif
                            </td>
                            <td class="px-2 first:pl-5 last:pr-5 py-3 whitespace-nowrap w-px">
                                <div class="space-x-1 flex">
                                    <a href="{{ route('member.edit', $customer->id) }}">
                                        <button class="text-slate-400 hover:text-slate-500 rounded-full">
                                            <span class="sr-only">Edit</span>
                                            <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                                <path d="M19.7 8.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM12.6 22H10v-2.6l6-6 2.6 2.6-6 6zm7.4-7.4L17.4 12l1.6-1.6 2.6 2.6-1.6 1.6z" />
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>

        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-8">
        {{$customers->links()}}
    </div>
</div>
