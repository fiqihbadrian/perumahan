#!/bin/bash

echo "🚀 Setting up Laravel with Docker..."

# Build and start containers
echo "📦 Building Docker containers..."
docker-compose up -d --build

# Wait for MySQL to be ready
echo "⏳ Waiting for MySQL to be ready..."
sleep 10

# Install Composer dependencies
echo "📚 Installing Composer dependencies..."
docker-compose exec app composer install

# Install NPM dependencies
echo "📦 Installing NPM dependencies..."
docker-compose exec app npm install

# Copy .env file if not exists
if [ ! -f .env ]; then
    echo "📝 Creating .env file..."
    cp .env.docker .env
fi

# Generate application key
echo "🔑 Generating application key..."
docker-compose exec app php artisan key:generate

# Run migrations
echo "🗄️  Running database migrations..."
docker-compose exec app php artisan migrate --force

# Create storage link
echo "🔗 Creating storage link..."
docker-compose exec app php artisan storage:link

# Set permissions
echo "🔒 Setting permissions..."
docker-compose exec app chmod -R 775 storage bootstrap/cache

# Build assets
echo "🎨 Building frontend assets..."
docker-compose exec app npm run build

echo "✅ Setup complete!"
echo ""
echo "🌐 Application: http://localhost:8000"
echo "💾 PhpMyAdmin: http://localhost:8080"
echo ""
echo "📋 Useful commands:"
echo "   docker-compose up -d          # Start containers"
echo "   docker-compose down           # Stop containers"
echo "   docker-compose exec app bash  # Access container shell"
echo "   docker-compose logs -f app    # View logs"
