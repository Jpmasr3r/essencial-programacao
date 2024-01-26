# Criar ambiente de desevolvimento pelo node.js

## Passo 1: iniciar o projeto no node

```bash
npm init -y
```

## Passo 2: instalar babel, webpack e http server

```bash
npm install @babel/core @babel/cli webpack webpack-cli http-server
```

## Passo 3: configurar arquivos de configuração

- Criar arquivo **_webpack.config.js_**
- Escrever dentro

  ```javascript
  const path = require("path");

  module.exports = {
    entry: {
      index: "./src/index.js",
    },
    output: {
      filename: "[name].js",
      path: path.resolve(__dirname, "public/dist"),
    },
    module: {
      rules: [
        {
          test: /\.(js|jsx)$/,
          exclude: /node_modules/,
          use: {
            loader: "babel-loader",
          },
        },
      ],
    },
  };
  ```
- Criar pasta src e pasta public criando os arquivos .js no src (sempre que criar um arquivo .js adicionar uma linha de codigo em module.exports.entry)

  ```javascript
  module.exports = {
    entry: {
      seuArquivo: "./src/seuArquivo.js",
    },
  };
  ```

## Passo 4: executar script webpack

- Adicionar ao package.json

  ```json
  {
    "scripts": {
      "start": "npx http-server --watch",
      "build": "webpack --mode development --watch",
      "dev": "npm run start && npm run build"
    }
  }
  ```
- O script start executa um servidor http, o build faz os arquivos do babel na dist o dev executa os 2

## Passo 5: Selecionar o arquivo script no html

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="dist/seuArquivo.js" async></script>
    <title>Login</title>
</head>

<body>
</body>

</html>
```
* Agora so instalar as bibiliotecas que desejar com react ou typescript
