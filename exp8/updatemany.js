const { MongoClient } = require('mongodb'); // Use destructuring to import MongoClient
const url = 'mongodb://localhost:27017/';

async function updateDocuments() {
    let client;
    try {
        client = await MongoClient.connect(url, { useNewUrlParser: true, useUnifiedTopology: true });
        const db = client.db('exp8');
        const myQuery = { address: /Harvansh nagar/ };
        const newValues = { $set: { name: 'Shivani' } };
        
        const result = await db.collection('studentlist').updateMany(myQuery, newValues);
        console.log(result.modifiedCount + ' document(s) updated');
    } catch (err) {
        console.error('An error occurred:', err);
    } finally {
        if (client) {
            await client.close(); // Ensure the client is closed in the finally block
        }
    }
}

updateDocuments();
