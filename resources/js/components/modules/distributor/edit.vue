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
              <router-link to="/distributers" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Distributors</router-link>
              <router-link to="/purchaseOrders" class="px-4 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">Purchase Orders</router-link>
            </div>
          </div>
        </div>
      </nav>
  
      <!-- Create/Edit Business Form -->
      <div class="w-full mx-auto p-6 bg-white rounded-lg  mt-6">
        <h2 class="text-2xl font-bold text-center mb-6">Edit Distributor</h2>
  
        <form action="#" method="POST">
          <!-- Registered Business Name -->
          <div class="mb-4">
            <label for="business_name" class="block text-sm font-medium text-gray-700">Registered Business Name</label>
            <input type="text" id="business_name" name="business_name" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter business name" required>
          </div>
  
          <!-- Registered Address -->
          <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Registered Address</label>
            <input type="text" id="address" name="address" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter registered address" required>
          </div>
  
          <!-- Country -->
          <div class="mb-4">
            <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
            <select id="country" name="country" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
              <option value="">Select Country</option>
              <option value="US">United States</option>
              <option value="UK">United Kingdom</option>
              <option value="CA">Canada</option>
              <option value="IN">India</option>
              <!-- Add more countries here -->
            </select>
          </div>
  
          <!-- VAT Number -->
          <div class="mb-4">
            <label for="vat_number" class="block text-sm font-medium text-gray-700">VAT Number</label>
            <input type="text" id="vat_number" name="vat_number" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter VAT Number" required>
          </div>
  
          
          <!-- Primary Logistics Contact -->
          <div class="mb-4">
            <label for="logistics_contact" class="block text-sm font-medium text-gray-700">Primary Logistics  Name</label>
            <input type="text" id="logistics_contact" name="logistics_contact" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter Logistics Contact (Name, Email, Phone)" required>
          </div>
          <div class="mb-4">
            <label for="logistics_contact" class="block text-sm font-medium text-gray-700">Primary Logistics Email</label>
            <input type="text" id="logistics_contact" name="logistics_contact" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter Logistics Contact (Name, Email, Phone)" required>
          </div>
          <div class="mb-4">
            <label for="logistics_contact" class="block text-sm font-medium text-gray-700">Primary Logistics Contact</label>
            <input type="text" id="logistics_contact" name="logistics_contact" class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Enter Logistics Contact (Name, Email, Phone)" required>
          </div>
  
          <!-- Actions (Submit & Cancel) -->
          <div class="flex justify-end space-x-4 mt-6">
            <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancel</button>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </template>
  