# Paazl connector

You can use this package to easily make a soap connection to paazl webservice in PHP.
 
 Ex. 
 

# Regenerate package

```bash
wget https://phar.wsdltophp.com/wsdltophp.phar
php wsdltophp.phar generate:package \
    --urlorpath="https://ost.paazl.com/parcelshipperservice/orderRequest.wsdl" \
    --soapclient="\Etrias\PaazlConnector\SoapClient" \
    --destination ./ \
    --composer-name="etrias/paazl-connector" \
    --composer-settings="require.meng-tian/async-soap-guzzle:^0.2.4" \
    --namespace Etrias\\PaazlConnector \
    --force
```
