# Hotel Management System

A web-based Hotel Management System developed as a group project for a university course. The application provides hotel management functionality for room types, rooms, facilities, bookings, services, and user accounts through a Laravel backend and REST API.

## Project Information

- **Class:** D
- **Group:** 4
- **Project Type:** University Group Project
- **Primary Contribution:** Backend Development & Integration

## Team Members

| Name | Student ID | Responsibility |
|---|---|---|
| I Wayan Yudistira Wirjananta | 220711793 | Backend Development & Integration |
| Samuel Chandra Wijaya | 220711794 | UI/UX Design |
| Mukti Laksono | 220711693 | Frontend Development |

## Features

The project includes the following functionality:

- User registration, login, and logout.
- User profile management.
- Room type management.
- Hotel room management.
- Facility management.
- Gallery management.
- Booking management.
- Service type management.
- Service ordering and order management.
- Dashboard operations for managing hotel data.
- Booking and order statistics.
- User-specific bookings and orders.
- REST API endpoints for retrieving, creating, updating, and deleting data.
- Pagination for selected data retrieval endpoints.
- Relationships between room types and facilities.
- Combined booking and order data retrieval.

## Technology Stack

The repository includes Laravel/PHP application files and JavaScript frontend build configuration.

The project uses the following tools and technologies:

- **Backend:** Laravel / PHP
- **Database:** MySQL-compatible SQL database
- **Frontend tooling:** Node.js and Vite

> The exact framework versions and additional dependencies should be confirmed from `composer.json` and `package.json`.

## REST API Documentation

The following endpoints were implemented as part of the project.

**Base URL:** `http://localhost:8000/api`

The examples below assume the Laravel application is running locally on port `8000`. Adjust the base URL to match your environment.

### 1. Authentication

| Method | Endpoint | Description |
|---|---|---|
| POST | `/register` | Register a new user |
| POST | `/login` | Authenticate a user |
| POST | `/logout` | Log out the authenticated user |

### 2. Room Types — JenisKamar

| Method | Endpoint | Description |
|---|---|---|
| GET | `/JenisKamar` | Retrieve room types with pagination |
| GET | `/JenisKamar/all` | Retrieve all room types without pagination |
| GET | `/JenisKamar/{id}` | Retrieve a specific room type |
| GET | `/JenisKamar/user/{id}` | Retrieve room types associated with a user |
| POST | `/JenisKamar` | Create a room type |
| POST | `/JenisKamar/{id}` | Update a room type |
| POST | `/JenisKamar/addFasilitas` | Add facilities to a room type |
| DELETE | `/JenisKamar/{id}` | Delete a room type |

### 3. Rooms — Kamar

| Method | Endpoint | Description |
|---|---|---|
| GET | `/Kamar` | Retrieve rooms with pagination |
| GET | `/Kamar/all` | Retrieve all rooms without pagination |
| GET | `/Kamar/{id}` | Retrieve a specific room |
| GET | `/Kamar/user/{id}` | Retrieve rooms associated with a user |
| POST | `/Kamar` | Create a room |
| POST | `/Kamar/{id}` | Update a room |
| DELETE | `/Kamar/{id}` | Delete a room |

### 4. Facilities — Fasilitas

| Method | Endpoint | Description |
|---|---|---|
| GET | `/Fasilitas` | Retrieve facilities |
| GET | `/Fasilitas/all` | Retrieve all facilities |
| GET | `/Fasilitas/{id}` | Retrieve a specific facility |
| GET | `/Fasilitas/user/{id}` | Retrieve facilities associated with a user |
| POST | `/Fasilitas` | Create a facility |
| POST | `/Fasilitas/{id}` | Update a facility |
| DELETE | `/Fasilitas/{id}` | Delete a facility |

### 5. Bookings — Booking

| Method | Endpoint | Description |
|---|---|---|
| GET | `/Booking` | Retrieve booking records |
| GET | `/Booking/all` | Retrieve all bookings |
| GET | `/Booking/Count` | Retrieve the total booking count |
| GET | `/Booking/{id}` | Retrieve a specific booking |
| GET | `/Booking/user/{id}` | Retrieve bookings for a specific user |
| GET | `/Booking/user` | Retrieve bookings for the authenticated user |
| GET | `/Booking/User/Count` | Retrieve booking counts for users |
| GET | `/BookingPesanan` | Retrieve combined booking and order data with booked status |
| GET | `/User/BookingPesanan` | Retrieve combined booking and order data belonging to the authenticated user, with booked status |
| POST | `/Booking` | Create a booking as a user |
| POST | `/Booking/dashboard` | Create a booking through the dashboard |
| POST | `/Booking/{id}` | Update a booking |
| POST | `/Booking/dashboard/{id}` | Update a booking through the dashboard |
| DELETE | `/Booking/{id}` | Delete a booking |

### 6. Gallery — Galery

| Method | Endpoint | Description |
|---|---|---|
| GET | `/Galery` | Retrieve gallery records |
| GET | `/Galery/all` | Retrieve all gallery records |
| GET | `/Galery/{id}` | Retrieve a specific gallery record |
| GET | `/Galery/Data/{id}` | Retrieve gallery data associated with a room type or service |
| GET | `/Galery/user/{id}` | Retrieve gallery records associated with a user |
| POST | `/Galery` | Create a gallery record |
| POST | `/Galery/{id}` | Update a gallery record |
| DELETE | `/Galery/{id}` | Delete a gallery record |

### 7. Service Types — JenisService

| Method | Endpoint | Description |
|---|---|---|
| GET | `/JenisService` | Retrieve service types |
| GET | `/JenisService/all` | Retrieve all service types |
| GET | `/JenisService/{id}` | Retrieve a specific service type |
| GET | `/JenisService/user/{id}` | Retrieve service types associated with a user |
| POST | `/JenisService` | Create a service type |
| POST | `/JenisService/{id}` | Update a service type |
| DELETE | `/JenisService/{id}` | Delete a service type |

### 8. Orders — Pemesanan

| Method | Endpoint | Description |
|---|---|---|
| GET | `/Pemesanan` | Retrieve order records |
| GET | `/Pemesanan/all` | Retrieve all orders |
| GET | `/Pemesanan/Count` | Retrieve the total order count |
| GET | `/Pemesanan/{id}` | Retrieve a specific order |
| GET | `/Pemesanan/user/{id}` | Retrieve orders for a specific user |
| GET | `/Pemesanan/user` | Retrieve orders for the authenticated user |
| GET | `/Pemesanan/User/Count` | Retrieve the order count for a user |
| POST | `/Pemesanan` | Create an order as a user |
| POST | `/Pemesanan/dashboard` | Create an order through the dashboard |
| POST | `/Pemesanan/{id}` | Update an order |
| POST | `/Pemesanan/dashboard/{id}` | Update an order through the dashboard |
| DELETE | `/Pemesanan/{id}` | Delete an order |

### 9. User Management — User

| Method | Endpoint | Description |
|---|---|---|
| GET | `/User` | Retrieve user records |
| GET | `/User/all` | Retrieve all users |
| GET | `/User/Count` | Retrieve the total user count |
| GET | `/UserData` | Retrieve the authenticated user's data |
| GET | `/User/user/{id}` | Retrieve user-related data; confirm the exact behavior in the implementation |
| POST | `/User` | Create a user through the dashboard |
| POST | `/User/{id}` | Update a user through the dashboard |
| POST | `/EditUser` | Edit user information |
| POST | `/UserEditData` | Update the authenticated user's information |
| DELETE | `/User/{id}` | Delete a user |

## Getting Started

### Prerequisites

Before running the application, ensure that you have installed:

- PHP compatible with the Laravel version used by the project.
- Composer.
- Node.js and npm.
- MySQL or another database supported by the application.

### Installation

**1. Clone the repository**

```bash
git clone <repository-url>
cd <repository-directory>
```

Replace the placeholders with your actual GitHub repository URL and directory name.

**2. Install PHP dependencies**

```bash
composer install
```

**3. Install frontend dependencies**

```bash
npm install
```

**4. Configure environment variables**

Create a local `.env` file using `.env.example` as a reference.

```bash
cp .env.example .env
```

Configure your local database connection in `.env`. Use your own local database credentials.

**5. Generate the Laravel application key**

```bash
php artisan key:generate
```

**6. Create the database**

Create an empty database for the application and configure its name and credentials in `.env`.

**7. Run database migrations**

```bash
php artisan migrate
```

If the project requires initial data, use the project's available seeders after reviewing their contents:

```bash
php artisan db:seed
```

Only run the seeder command if the project includes appropriate seeders.

**8. Build frontend assets**

For development:

```bash
npm run dev
```

**9. Start the Laravel development server**

In a separate terminal:

```bash
php artisan serve
```

The Laravel application will normally be available at:

`http://localhost:8000`

## Demo Accounts

The original development database contained test account credentials. For security, this public README does not publish those passwords.

To test the application, configure local demo accounts using the project's registration flow or create suitable test users in your local development database.

Use fictional credentials that are not reused for personal accounts.

## Notes on API Usage

- Endpoint behavior is based on the project's original endpoint list.
- Some endpoints may require authentication.
- Endpoints that accept an `{id}` parameter require the corresponding record identifier.
- POST endpoints may require JSON, form data, or multipart form data depending on their implementation.
- The exact request fields, response structures, validation rules, and authentication requirements should be verified against the source code.
- Endpoint names preserve the original capitalization. Depending on the server and routing configuration, case sensitivity may matter.
- Pagination behavior may differ between endpoints, even where similar endpoint names are used.

## Project Structure

The repository follows a Laravel application structure, with key directories including:

```text
.
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
├── package.json
└── README.md
```

The exact contents may vary depending on the current version of the project.

## Contributions

This project was developed collaboratively by the members of Class D, Group 4, as part of a university course.

Each member contributed to a different part of the project, including backend development, integration, design, and frontend implementation.

## Disclaimer

This project was created for educational purposes. It is intended to demonstrate web development, backend integration, database management, and REST API implementation.

Before using the application in a production environment, review its authentication, authorization, input validation, error handling, and security configuration.

## License

No license has been specified yet. Unless a license is added to the repository, others should not assume they have permission to reuse, modify, or redistribute the code.
