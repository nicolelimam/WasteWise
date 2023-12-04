const { SerialPort } = require('serialport');
const { ReadlineParser } = require('@serialport/parser-readline');
const fs = require('fs');

const caminhoArquivo = '/opt/lampp/htdocs/WasteWise2/dadosArduino.txt';
const port = new SerialPort({path:'/dev/ttyACM0', baudRate: 9600 });
const parser = port.pipe(new ReadlineParser({ delimiter: '\r\n' }));


port.on('open',() => {
    console.log('PORTA SERIAL ABERTA');
})

parser.on('data', (dadosDoArduino) => {
  console.log(`Dados recebidos do Arduino: ${dadosDoArduino}`);
  fs.appendFile(caminhoArquivo, `${dadosDoArduino}\n`, (err) => {
    if (err) {
      console.error('Erro ao salvar dados no arquivo:', err);
    } else {
      console.log('Dados salvos no arquivo com sucesso!');
    }
  });

});

port.on('error', (err) => {
  console.error('ERRO NA PORTA SERIAL:', err.message);
});

port.on('close', () => {
  console.log('PORTA SERIAL FECHADA');
});
