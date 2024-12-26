import express from "express";
import { MercadoPagoConfig, Preference } from "mercadopago";
import path from 'path';

const __dirname = path.resolve();

const app = express();
const port = 3000;

const client = new MercadoPagoConfig({ accessToken: "TEST-610301619510016-100508-8b6959433c946f5d32a2a155aee781df-1233052360" });

app.use(express.static(__dirname));

app.post("create-preference", (req, res) => {
  const preference = new Preference(client);

  preference
    .create({
      body: {
        items: [
          {
            title: "My product",
            quantity: 1,
            unit_price: 2000,
          },
        ],
      },
    })
    .then((response) => {
      res.json({
        id: response.id,
        initPoint: response.init_point,
      });
      console.log(response);
    })
    .catch((error) => {
      console.error("Error al crear la preferencia:", error);
      res.status(500).json({ error: "Error al crear la preferencia" });
      console.log(error);
    });
});

app.listen(port, () => {
  console.log(`Servidor corriendo en http://localhost:${port}`);
});