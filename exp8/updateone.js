const { MongoClient } = require('mongodb'); // Destructure the MongoClient import
const url = 'mongodb://localhost:27017/';

MongoClient.connect(url, { useNewUrlParser: true, useUnifiedTopology: true }, function(error, client) {
    if (error) {
        throw error;
    }
    
    const db = client.db('exp8');
    const whereClause = { name: /Chaman Gautam/ };
    const newValues = { $set: { name: 'Lucky Gautam' } };

    db.collection('studentlist').updateOne(whereClause, newValues, function(err, res) {
        if (err) {
            throw err;
        }
        
        console.log(res.modifiedCount + ' document updated');
        client.close(); // Ensure to close the client connection
    });
});
