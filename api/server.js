const express = require('express');
const mongodb = require('mongodb');

const app = express();
const port = 3000;
const mongoURI = 'mongodb+srv://goyita:12345@cluster0.dokcfjz.mongodb.net/'; // Reemplaza con tu URI de MongoDB

// Conexión a la base de datos
mongodb.MongoClient.connect(mongoURI, (err, client) => {
  if (err) {
    console.error('Error al conectar a la base de datos:', err);
    process.exit(1);
  }
  
  console.log('Conexión exitosa a la base de datos');
  const db = client.db();
  const collection = db.collection('electro'); // Reemplaza 'documents' con el nombre de tu colección
  
  // Ruta para obtener todos los documentos
  app.get('/api/documents', (req, res) => {
    collection.find({}).toArray((err, documents) => {
      if (err) {
        console.error('Error al obtener los documentos:', err);
        res.status(500).json({ error: 'Error interno del servidor' });
      } else {
        res.json(documents);
      }
    });
  });
  
  // Iniciar el servidor
  app.listen(port, () => {
    console.log(`Servidor API escuchando en el puerto ${port}`);
  });
});
