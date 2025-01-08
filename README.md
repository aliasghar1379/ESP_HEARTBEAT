# ESP_HEARTBEAT

An open-source heart rate monitoring system powered by ESP8266, featuring wireless connectivity and real-time data visualization.

![ESP_HEARTBEAT Device](https://github.com/aliasghar1379/ESP_HEARTBEAT/assets/59472710/4f499b32-fcf7-42a0-afeb-bc28c1838990)

## Features

- **WiFi Soft AP Configuration**
  - Initial setup as a WiFi access point
  - Web-based interface for WiFi network selection
  
- **Real-time Monitoring**
  - Heart rate data visualization on 0.96-inch SPI LCD display
  - Remote data logging via PHP-based API
  
- **Web Integration**
  - Custom PHP API for data collection and storage
  - Secure data transmission to personal server
  
- **Hardware**
  - ESP8266 SOC as the main controller
  - 0.96-inch LCD display with SPI interface
  - Pulse sensor integration

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/aliasghar1379/ESP_HEARTBEAT.git
   ```
2. go to the document guide and make a PHP base api for log the data on your server
   
3. Install required dependencies (list specific libraries needed)

4. Upload the firmware to your ESP8266 device

## Initial Setup

1. Power on the device
2. Connect to the ESP_HEARTBEAT WiFi network
3. Navigate to the configuration portal
4. Select your local WiFi network
5. The device will automatically connect and begin monitoring

## Hardware Requirements

- ESP8266 development board
- 0.96-inch SPI LCD display
- Pulse sensor
- Power supply
- (Add any additional components)

## Software Dependencies

- Arduino IDE
- Required libraries:
  - ESP8266WiFi
  - ESP8266WebServer
  - (List other necessary libraries)

## API Documentation

The device connects to a PHP-based API for data logging.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request. For major changes, please open an issue first to discuss what you would like to change.


## Acknowledgments

- Thanks to all contributors

## Contact

- GitHub: [@aliasghar1379](https://github.com/aliasghar1379)
