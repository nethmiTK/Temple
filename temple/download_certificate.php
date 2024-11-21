import pandas as pd

# Assuming you already have a connection to your MySQL database and it's stored in a variable called "connection"

# Fetch data from MySQL database
query = "SELECT DonationID, DonorName FROM donation;"
df = pd.read_sql(query, connection)

# Generate certificates
for index, row in df.iterrows():
    # Example: Generating a certificate file for each donor
    certificate_content = f"Certificate of Donation\n\nThis is to certify that {row['DonorName']} has generously donated to our cause.\nDonation ID: {row['DonationID']}"
    file_name = f"certificate_{row['DonorName'].replace(' ', '_')}.txt"
    with open(file_name, 'w') as file:
        file.write(certificate_content)
    print(f"Certificate generated for {row['DonorName']}")
