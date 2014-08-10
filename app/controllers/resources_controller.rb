class ResourcesController < ApplicationController

  def index
    @course = Course.current
  end

end
