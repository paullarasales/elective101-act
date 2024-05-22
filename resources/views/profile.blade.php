@extends('layout.layout')

@section('title', 'Profile')

@section('content')
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .profile-container {
        width: 80%; /* Adjust width as needed */
        max-width: 800px; /* Set maximum width */
        margin: 2em auto;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        padding: 2em;
        display: flex;
    }

    .user-info {
        flex: 1; /* Take up all available space */
        margin-right: 2em; /* Add space between columns */
    }

    .update-form {
        flex: 1; /* Take up all available space */
    }

    .user-details {
        margin-bottom: 2em;
    }

    .user-field {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1em;
    }

    .field-label {
        font-weight: bold;
        color: #555;
        font-size: 16px; /* Adjust font size */
    }

    .field-value {
        color: #333;
        font-size: 16px; /* Adjust font size */
    }

    .form-group {
        margin-bottom: 1.5em;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        color: #555;
        margin-bottom: 0.5em;
        font-size: 16px; /* Adjust font size */
    }

    .form-group input {
        width: 100%;
        padding: 1em;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s;
        font-size: 16px; /* Adjust font size */
    }

    .form-group input:focus {
        border-color: #007bff;
        outline: none;
    }

    .form-group button {
        padding: 0.75em 1.5em;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-size: 16px; /* Adjust font size */
        width: 100%; /* Make buttons full width */
    }

    .form-group button:hover {
        background-color: #0056b3;
    }

    .delete-btn {
        background-color: #dc3545;
    }

    .delete-btn:hover {
        background-color: #c82333;
    }

    .logout-form {
        text-align: center;
        margin-top: 2em;
    }

    .logout-form button {
        background-color: #dc3545;
        color: #fff;
        padding: 0.75em 1.5em;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-size: 16px; /* Adjust font size */
        width: auto; /* Adjust width as needed */
    }

    .logout-form button:hover {
        background-color: #c82333;
    }

    /* Hide scrollbar */
    ::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for Firefox */
    scrollbar-width: none;
</style>

<div class="profile-container">
    <div class="user-info">
        <div class="profile-header">
            <h1 style="font-size: 24px; margin-bottom: 0.5em;">Your Profile</h1>
            <a href="{{ route('dashboard') }}" class="back-to-dashboard" style="font-size: 16px;">Back to Dashboard</a>
        </div>

        <div class="user-details">
            <div class="user-field">
                <span class="field-label">Firstname:</span>
                <span class="field-value">{{ $user->firstname }}</span>
            </div>
            <div class="user-field">
                <span class="field-label">Lastname:</span>
                <span class="field-value">{{ $user->lastname }}</span>
            </div>
            <div class="user-field">
                <span class="field-label">Username:</span>
                <span class="field-value">{{ $user->username }}</span>
            </div>
        </div>
    </div>

    <div class="update-form">
        <form action="{{ route('update-profile') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="firstname" style="font-size: 16px;">Firstname</label>
                <input type="text" id="firstname" name="firstname" value="{{ $user->firstname }}" required style="font-size: 16px;">
            </div>
            <div class="form-group">
                <label for="lastname" style="font-size: 16px;">Lastname</label>
                <input type="text" id="lastname" name="lastname" value="{{ $user->lastname }}" required style="font-size: 16px;">
            </div>
            <div class="form-group">
                <label for="username" style="font-size: 16px;">Username</label>
                <input type="text" id="username" name="username" value="{{ $user->username }}" required style="font-size: 16px;">
            </div>
            <div class="form-group">
                <button type="submit" style="font-size: 16px;">Update Profile</button>
            </div>
        </form>

        <form action="{{ route('profile.delete') }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="form-group">
                <button type="submit" class="delete-btn" style="font-size: 16px; width: 400px; background: red;">Delete Account</button>
            </div>
        </form> 
    </div>
</div>
@endsection
