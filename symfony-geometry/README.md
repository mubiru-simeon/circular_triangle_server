# Symfony Geometry Calculator

This Symfony application provides a geometry calculation API with support for circles and triangles.

## Features

- Calculate surface area and circumference/diameter for circles and triangles
- Sum areas and diameters of multiple shapes
- RESTful API with JSON responses
- Built with Symfony MVC framework

## Installation

1. Clone the repository
2. Install dependencies:
   ```bash
   composer install
   ```
3. Start the development server:
   ```bash
   php -S localhost:8000 -t public
   ```

## API Documentation

### Circle Calculations
- **Endpoint**: GET /circle/{radius}
- **Parameters**:
  - radius: float
- **Response**:
  ```json
  {
    "type": "circle",
    "radius": 2.0,
    "surface": 12.56,
    "circumference": 12.56
  }
  ```

### Triangle Calculations
- **Endpoint**: GET /triangle/{a}/{b}/{c}
- **Parameters**:
  - a: float (side length)
  - b: float (side length)
  - c: float (side length)
- **Response**:
  ```json
  {
    "type": "triangle",
    "a": 3.0,
    "b": 4.0,
    "c": 5.0,
    "surface": 6.0,
    "circumference": 12.0
  }
  ```

### Sum Operations
The GeometryCalculator service provides methods for:
- Summing areas of two shapes
- Summing diameters of two shapes

Note: For triangles, diameter is calculated as the longest side.

## Testing

You can test the API using curl or Postman:

```bash
# Test circle calculations
curl http://localhost:8000/circle/2.0

# Test triangle calculations
curl http://localhost:8000/triangle/3.0/4.0/5.0
```

## Solution Overview

This solution implements all required features:
1. Circle and Triangle models with calculation methods
2. RESTful endpoints for geometric calculations
3. GeometryCalculator service for sum operations
4. JSON responses matching the specified format
5. Proper Symfony MVC structure with dependency injection
6. Triangle diameter calculation using longest side
