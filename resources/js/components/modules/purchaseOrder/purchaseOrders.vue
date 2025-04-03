<template>
    <div class="w-screen flex flex-col">
      
      <!-- Full-Width Navbar -->
      <nav class="shadow-md w-full">
        <div class="max-w-full px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
              <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
            </div>
  
            <!-- Navigation Links -->
            <div class="hidden sm:flex space-x-4">
              <router-link to="/products" class="px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">Products</router-link>
              <router-link to="/suppliers" class="px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">Suppliers</router-link>
              <router-link to="/distributers" class="px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">Distributors</router-link>
              <router-link to="/pruchaseOrders" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Purchase Orders</router-link>
            </div>
          </div>
        </div>
      </nav>
  
      <!-- Table Section: Takes Remaining Space -->
      <div class="flex-grow flex items-center justify-center p-6 w-full">
        <div class="w-full max-w-screen-xl bg-white  rounded-lg p-6">
          <h2 class="text-xl font-semibold text-gray-800 mb-4">Purchase Orders</h2>
          <div class="flex justify-end">
            <router-link to="/purchaseOrderCreate">
              <button class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-green-600">Create</button>
            </router-link>
            </div>
        
          <div class="mt-6 overflow-x-auto rounded-lg">
            <table class="w-full border border-gray-200 rounded-lg">
              <thead class="bg-gray-100 text-gray-700 text-xs">
                <tr>
                  <th class="px-3 py-2 border-b">POS</th>
                  <th class="px-3 py-2 border-b">POD</th>
                  <th class="px-3 py-2 border-b">Supplier or Distributor</th>
                  <th class="px-3 py-2 border-b">Product code</th>
                  <th class="px-3 py-2 border-b">Quantity</th>
                  <th class="px-3 py-2 border-b">Delivery date</th>
                  <th class="px-3 py-2 border-b">total(Ex VAT)</th>
                  <th class="px-3 py-2 border-b">status</th>
                  <th class="px-6 py-3 border-b">Actions</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-100">
                <tr class="hover:bg-gray-50">
                  <td class="px-3 py-3 text-xs text-gray-700">ABC Ltd.</td>
                  <td class="px-3 py-3 text-xs text-gray-700">123 Street, City</td>
                  <td class="px-3 py-3 text-xs text-gray-700">USA</td>
                  <td class="px-3 py-3 text-xs text-gray-700">123456789</td>
                  <td class="px-3 py-3 text-xs text-gray-700">John Doe</td>
                  <td class="px-3 py-3 text-xs text-gray-700">Jane Smith,</td>
                  <td class="px-3 py-3 text-xs text-gray-700">John Doe,</td>
                  <td class="px-3 py-3 text-xs text-gray-700">Jane Smith,</td>
                  <td class="px-6 py-6 text-xs flex items-center space-x-2">
                    <router-link to="/purchaseOrderEdit">
                <button class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600">Edit</button>
                </router-link>
                <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">Delete</button>
                </td>
                </tr>
                <!-- Add more rows as needed -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </template>
  