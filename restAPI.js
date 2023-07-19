const express = require('express');
const app = express();
app.use(express.json());

// sample endpoint
app.get('/api/data', (req, res) => {
  // Replace this with your MySQL data fetching logic
  res.json({ message: 'Hello, world!' });
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => console.log(`Server is listening on port ${PORT}`));
