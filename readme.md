```diff
- YOUTUBE SEARCH
```

## Follow the below steps to start with project

### 1. Clone the github repo locally

```
git clone https://github.com/thepratiksolanki/youtube-search.git youtube-search
```

### 2. cd into your project

```
cd youtube-search
```

### 3. Install composer dependencies

```
composer install
```

### 4. Create a copy of .env file

```
cp .env.example .env
```

### 5. Add Youtube API Key at the end of .env file with below key

```
YOUTUBE_API_KEY = <YOUR API KEY>
```

### 6. Generate an app encryption key

```
php artisan key:generate
```

### 7. Run the application

```
php artisan serve
```
