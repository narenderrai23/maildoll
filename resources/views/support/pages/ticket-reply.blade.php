@extends('../layout/' . layout())

@section('subhead')
    <title>@translate(Support Tickets)</title>
@endsection

@section('subcontent')
    <div class="content">
        <div class="flex h-screen antialiased text-gray-800">
            <div class="flex flex-row h-full w-full overflow-x-hidden">
                <div class="flex flex-col py-8 pl-6 pr-2 w-64 bg-white flex-shrink-0">
                    <div class="flex flex-row items-center justify-center h-12 w-full">
                        <div class="flex items-center justify-center rounded-2xl text-indigo-700 bg-indigo-100 h-10 w-10">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                                </path>
                            </svg>
                        </div>
                        <div class="ml-2 font-bold text-2xl">QuickChat</div>
                    </div>
                    <div
                        class="flex flex-col items-center bg-indigo-100 border border-gray-200 mt-4 w-full py-6 px-4 rounded-lg">
                        <div class="h-20 w-20 rounded-full border overflow-hidden">
                            <img src="{{ filePath('/') . $support_ticket_info->user->photo }}" alt="Avatar" class="h-full w-full" />
                        </div>
                        <div class="text-sm font-semibold mt-2">{{ $support_ticket_info->user->name }}</div>
                        @if (Auth::user()->user_type == 'Admin')
                            <div class="text-xs text-gray-500">Customer</div>
                        @else
                            <div class="text-xs text-gray-500">Admin</div>
                        @endif
                    </div>
                    @if ($support_ticket_info->solved == 0)
                        <a href="{{ route('support.ticket.mark_as_solved', $support_ticket_info->id) }}"
                            class="mt-2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                            <x-feathericon-check-circle class="mr-2 p-0" />
                            <span>Mark As Solved</span>
                        </a>
                    @else
                        <a href="{{ route('support.ticket.mark_as_solved', $support_ticket_info->id) }}"
                            class="mt-2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                            <x-feathericon-check-circle class="mr-2 p-0" />
                            <span>Mark As Issue</span>
                        </a>
                    @endif
                    <div class="flex flex-col mt-8">
                        <div class="flex flex-row items-center justify-between text-xs">
                            <span class="font-bold">Recent Conversations</span>
                        </div>
                        <div class="flex flex-col space-y-1 mt-4 -mx-2 h-48 overflow-y-auto">
                            @if (Auth::user()->user_type == 'Admin')
                                @foreach ($user_tickets as $recent_ticket)
                                    <a href="{{ route('ticket.reply', $recent_ticket->ticket_no) }}"
                                        class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                                        <div class="flex items-center justify-center h-8 w-8 bg-orange-200 rounded-full">
                                            P
                                        </div>
                                        <div class="ml-2 text-sm font-semibold">{{ $recent_ticket->name }}</div>
                                    </a>
                                @endforeach
                            @else
                            @endif
                        </div>
                    </div>
                </div>
                <div class="flex flex-col flex-auto h-full p-6">
                    <div class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-100 h-full p-4">
                        <div class="flex flex-col h-full overflow-x-auto mb-4">
                            <div class="flex flex-col h-full">
                                <div class="grid grid-cols-12 gap-y-2">
                                    {{-- Customer ticket description --}}
                                    <div class="col-start-6 col-end-13 p-3 rounded-lg">
                                        <div class="flex items-center justify-start flex-row-reverse">
                                            <div style="color: white;font-weight: bold;font-size: 18px"
                                                class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                                C
                                            </div>
                                            <div class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                                                {!! $support_ticket_info->desc !!}
                                            </div>
                                        </div>
                                    </div>

                                    @foreach ($support_ticket_info->replies as $support_ticket)
                                        @if ($support_ticket->reply_by == 1)
                                            <div class="col-start-1 col-end-8 p-3 rounded-lg">
                                                <div class="flex flex-row items-center">
                                                    <div style="color: white;font-weight: bold;font-size: 18px"
                                                        class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                                        A
                                                    </div>
                                                    <div class="relative ml-3 text-sm bg-white py-2 px-4 shadow rounded-xl">
                                                        <div>
                                                            {{ $support_ticket->reply }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-start-6 col-end-13 p-3 rounded-lg">
                                                <div class="flex items-center justify-start flex-row-reverse">
                                                    <div style="color: white;font-weight: bold;font-size: 18px"
                                                        class="flex items-center justify-center h-10 w-10 rounded-full bg-indigo-500 flex-shrink-0">
                                                        C
                                                    </div>
                                                    <div
                                                        class="relative mr-3 text-sm bg-indigo-100 py-2 px-4 shadow rounded-xl">
                                                        {{ $support_ticket->reply }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <form
                            action="{{ route('support.ticket.reply', [$support_ticket_info->id, $support_ticket_info->ticket_no]) }}"
                            method="post"> @csrf
                            <div class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-4">

                                <div>
                                    <button class="flex items-center justify-center text-gray-400 hover:text-gray-600">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="flex-grow ml-4">
                                    <div class="relative w-full">
                                        <input type="text" name="reply"
                                            class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10"
                                            placeholder="Enter Your Replies" />
                                        <button
                                            class="absolute flex items-center justify-center h-full w-12 right-0 top-0 text-gray-400 hover:text-gray-600">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <button type="submit"
                                        class="flex items-center justify-center bg-indigo-500 hover:bg-indigo-600 rounded-xl text-white px-4 py-1 flex-shrink-0">
                                        <span>Send</span>
                                        <span class="ml-2">
                                            <svg class="w-4 h-4 transform rotate-45 -mt-px" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ filePath('bladejs/notes/index.js') }}"></script>
@endsection
