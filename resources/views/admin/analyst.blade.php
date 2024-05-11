
                            <div class="lg:col-span-8">
                                <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
                                    <div class="p-6 flex items-center justify-between border-b border-gray-100 dark:border-gray-800">
                                        <h6 class="text-lg font-semibold">Profit / Expenses Analytics</h6>
                                        
                                        <div class="position-relative">
                                            <select class="form-select form-input w-full py-2 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0" id="yearchart">
                                                <option value="Y" selected>Yearly</option>
                                                <option value="M">Monthly</option>
                                                <option value="W">Weekly</option>
                                                <option value="T">Today</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="mainchart" class="apex-chart px-4 pb-6"></div>
                                </div>
                            </div>

                            