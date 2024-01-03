from flask import Flask, request, jsonify

app = Flask(__name__)

# Define some sample data to serve as the API response
sample_data = {
    'institution_name': 'Sample Institution',
    'address': '123 Main Street, Addis Ababa, Ethiopia',
    'phone_number': '555-555-5555',
    'email': 'info@sampleinstitution.com'
}

# Define the API endpoint for searching addresses
@app.route('/api/searchAddress', methods=['POST'])
def search_address():
    # Get the institution name from the request data
    institution_name = request.form.get('institutionName')

    # Search for the address based on the institution name
    # Replace the sample data with your own address search code
    address = sample_data.get('address')

    # Prepare the response data as a JSON object
    response_data = {
        'institutionName': institution_name,
        'address': address
    }

    # Return the response data as a JSON object
    return jsonify(response_data)

# Define the main app route for serving the landing page
@app.route('/')
def landing_page():
    # Serve the HTML file for the landing page
    return app.send_static_file('index.html')

# Run the Flask app
if __name__ == '__main__':
    app.run(debug=True)