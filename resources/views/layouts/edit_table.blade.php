

<style>
    .card {
        border-radius: 1rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        border: none;
        background-color: #ffffff;
        transition: all 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        font-weight: 600;
        color: #2d3748;
    }

    .form-label {
        font-weight: 500;
        color: #4a5568;
    }

    .form-control {
        border-radius: 0.5rem;
        border: 1px solid #e2e8f0;
        transition: border-color 0.2s;
    }

    .form-control:focus {
        border-color: #5e72e4;
        box-shadow: 0 0 0 0.2rem rgba(94, 114, 228, 0.25);
    }

    .btn-primary {
        background-color: #5e72e4;
        border-color: #5e72e4;
        border-radius: 0.5rem;
        font-weight: 500;
    }

    .btn-primary:hover {
        background-color: #324cdd;
        border-color: #324cdd;
    }

    .btn-secondary {
        background-color: #adb5bd;
        border-color: #adb5bd;
        border-radius: 0.5rem;
        font-weight: 500;
    }

    .btn-secondary:hover {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .mb-3 label {
        margin-bottom: 0.3rem;
    }

    .d-flex.justify-content-between {
        gap: 1rem;
        flex-wrap: wrap;
    }
</style>

<form action="{{ route('tables.update', $table->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label"> table number</label>
        <input type="text" name="table_number" id="name" class="form-control"
               value="{{ old('table_number', $table->table_number) }}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label"> seating capacity</label>
        <textarea name="seating_capacity" id="description" class="form-control">{{ old('seating_capacity', $table->seating_capacity) }}</textarea>
    </div>

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">تحديث</button>
        <a href="{{ route('tables.create') }}" class="btn btn-secondary">رجوع</a>
    </div>
</form>


